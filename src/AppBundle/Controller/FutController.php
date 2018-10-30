<?php

namespace AppBundle\Controller;

use FUTApi\Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;


class FutController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {

        $content = $this->container->get('templating')->render('AppBundle:Fut:index.html.twig');

        return new Response($content);
    }

    /**
     * Create a new connexion.
     *
     */
    public function connectAction()
    {
        $loLogger = $this->get('logger');

        try {
            $fut = new Core('airness35@hotmail.com', 'Sinsemilia1', 'ps4', '006098');
        } catch(FutError $e) {
            $error = $e->GetOptions();
            die("We have an error logging in: ".$error['reason']);
        }

        $loLogger->error(var_dump($fut));

        $login = $fut->login();

        $fut->logout();

        return $login;
        //$items = $fut->searchAuctions('player');

    }

}