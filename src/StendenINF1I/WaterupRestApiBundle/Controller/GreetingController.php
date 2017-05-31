<?php

namespace StendenINF1I\WaterupRestApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as FOSRestBundleAnnotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use StendenINF1I\WaterupRestApiBundle\Model\Hello;

/**
 * @FOSRestBundleAnnotations\View()
 */
class GreetingController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function helloAction()
    {
        return new Hello();
    }
}
