<?php

namespace uni\Bundle\PeliculasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniPeliculasBundle:Default:index.html.twig', array('name' => $name));
    }
}
