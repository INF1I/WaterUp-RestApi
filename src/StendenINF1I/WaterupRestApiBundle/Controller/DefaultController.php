<?php

namespace StendenINF1I\WaterupRestApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StendenINF1IWaterupRestApiBundle:Default:index.html.twig');
    }
}
