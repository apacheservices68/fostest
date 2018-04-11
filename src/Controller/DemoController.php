<?php

namespace App\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;

class DemoController extends FOSRestController
{
    public function getApiDemosAction()
    {
        $data = array("hello" => "world");
        $view = View::create();
        $view->setData($data);
        return $view;
    }
}