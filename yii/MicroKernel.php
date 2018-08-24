<?php
// app/MicroKernel.php
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class MicroKernelJEDEN extends Kernel
// class MicroKernel extends Kernel
{
	use MicroKernelTrait;

	public function registerBundles()
	{
		return array(new Symfony\Bundle\FrameworkBundle\FrameworkBundle());
	}

	protected function configureRoutes(RouteCollectionBuilder $routes)
	{
		$routes->add('/', 'kernel:indexAction', 'index');
	}

	protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
	{
		$c->loadFromExtension('framework', ['secret' => '12345']);
	}

	public function indexAction()
	{
		return new Response('Hello World');
	}
}

class MicroKernelDWA extends Kernel
// class MicroKernel extends Kernel
{
	use MicroKernelTrait;

	public function registerBundles()
	{
		$bundles = array(
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new Symfony\Bundle\TwigBundle\TwigBundle(),
		);

		if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
			$bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
		}

		return $bundles;
	}

	protected function configureRoutes(RouteCollectionBuilder $routes)
	{
		$routes->mount('/_wdt', $routes->import('@WebProfilerBundle/Resources/config/routing/wdt.xml'));
		$routes->mount('/_profiler', $routes->import('@WebProfilerBundle/Resources/config/routing/profiler.xml'));

		$routes->add('/', 'kernel:indexAction', 'index');
	}

	protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
	{
		// load bundles' configuration
		$c->loadFromExtension('framework', [
			'secret' => '12345',
			'profiler' => null,
			'templating' => ['engines' => ['twig']],
		]);

		$c->loadFromExtension('web_profiler', ['toolbar' => true]);

		// add configuration parameters
		$c->setParameter('mail_sender', 'user@example.com');

		// register services
		$c->register('app.markdown', 'AppBundle\\Service\\Parser\\Markdown');
	}

	public function indexAction()
	{
		return $this->container->get('templating')->renderResponse('index.html.twig');
	}
}

class MicroKernelTRZY extends Kernel
// class MicroKernel extends Kernel
{
	use MicroKernelTrait;

	public function registerBundles()
	{
		return array(
			new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new Symfony\Bundle\TwigBundle\TwigBundle(),
			new AppBundle\AppBundle(),
		);
	}

	protected function configureRoutes(RouteCollectionBuilder $routes)
	{
		$routes->mount('/', $routes->import('@AppBundle/Controller', 'annotation'));
	}

	protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
	{
		$loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
		$loader->load(__DIR__.'/config/services.yml');
	}
}