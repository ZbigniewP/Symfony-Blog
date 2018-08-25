<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class yiiTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _wdt
        if (0 === strpos($pathinfo, '/_wdt/_wdt') && preg_match('#^/_wdt/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
        }

        if (0 === strpos($pathinfo, '/_profiler/_profiler')) {
            // _profiler_home
            if ('/_profiler/_profiler' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', '_profiler_home');
                }

                return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
            }

            if (0 === strpos($pathinfo, '/_profiler/_profiler/search')) {
                // _profiler_search
                if ('/_profiler/_profiler/search' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_search_bar
                if ('/_profiler/_profiler/search_bar' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                }

            }

            // _profiler_phpinfo
            if ('/_profiler/_profiler/phpinfo' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
            }

            // _profiler_open_file
            if ('/_profiler/_profiler/open' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
            }

            // _profiler
            if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
            }

            // _profiler_router
            if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
            }

            // _profiler_exception
            if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
            }

            // _profiler_exception_css
            if (preg_match('#^/_profiler/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
            }

        }

        // index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'index');
            }

            return array (  '_controller' => 'kernel:indexAction',  '_route' => 'index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
