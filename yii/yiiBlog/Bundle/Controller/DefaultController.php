<?php

namespace yiiBlog\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('yiiBlogBundle:Default:index.html.twig');
    }
}
