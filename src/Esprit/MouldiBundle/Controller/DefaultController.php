<?php

namespace Esprit\MouldiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritMouldiBundle:Default:index.html.twig');
    }
}
