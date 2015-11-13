<?php

namespace CityMoxo\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}")
     */
    public function indexAction($name)
    {
        return $this->render('CityMoxoFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
