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
        return new Response("Notre propre Hello World !");
    }

}