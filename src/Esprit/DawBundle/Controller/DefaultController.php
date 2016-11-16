<?php

namespace Esprit\DawBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DawBundle:Default:index.html.twig');
    }
}
