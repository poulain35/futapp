<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AccueilController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $content = $this->container->get('templating')->render('AppBundle:Accueil:index.html.twig');

        return new Response($content);
    }

}