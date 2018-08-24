<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('yii_blog_homepage', new Route('/', array(
    '_controller' => 'yiiBlogBundle:Default:index',
)));

return $collection;
