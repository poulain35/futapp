<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class FutController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return new Response("Bienvenue sur FUT ");
    }

}