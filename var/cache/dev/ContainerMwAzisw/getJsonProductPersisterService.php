<?php

namespace ContainerMwAzisw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJsonProductPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\JsonProductPersister' shared autowired service.
     *
     * @return \App\Service\JsonProductPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/JsonProductPersister.php';

        return $container->privates['App\\Service\\JsonProductPersister'] = new \App\Service\JsonProductPersister(\dirname(__DIR__, 4));
    }
}
