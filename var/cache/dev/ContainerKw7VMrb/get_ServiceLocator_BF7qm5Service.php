<?php

namespace ContainerKw7VMrb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BF7qm5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BF7qm5_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BF7qm5_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ruteRepository' => ['privates', 'App\\Repository\\RuteRepository', 'getRuteRepositoryService', true],
        ], [
            'ruteRepository' => 'App\\Repository\\RuteRepository',
        ]);
    }
}
