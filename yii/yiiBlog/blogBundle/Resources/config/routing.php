<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('yii_blogblog_homepage', new Route('/', array(
    '_controller' => 'yiiBlogblogBundle:Default:index',
)));

return $collection;
