<?php
use Symfony\Component\HttpFoundation\Request;

$loader = require __DIR__.'/../vendor/autoload.php';
// $loader = require __DIR__.'/../vendor/autoload-3.3.6.php';
// $loader = require __DIR__.'/../vendor/autoload-4.1.1.php';

require_once __DIR__.'/../yii/MicroKernel.php';
// $app = new MicroKernel('prod', false);
// $app = new MicroKernelJEDEN('test', true);
$app = new MicroKernelDWA('test', true);
// $app = new MicroKernelTRZY('test', true);

// require_once __DIR__.'/yii/YiiKernel.php';
// $app = new YiiKernel('dev', true);
$app->loadClassCache();

$app->handle(Request::createFromGlobals())->send();

// require 'web/app.php';
// require 'web/app_dev.php';
// require 'public/index.php';