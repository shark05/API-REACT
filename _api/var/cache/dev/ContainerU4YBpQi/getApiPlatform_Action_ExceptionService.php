<?php

namespace ContainerU4YBpQi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_ExceptionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.exception' shared service.
     *
     * @return \ApiPlatform\Action\ExceptionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/ExceptionAction.php';

        return $container->services['api_platform.action.exception'] = new \ApiPlatform\Action\ExceptionAction(($container->privates['serializer'] ?? $container->getSerializerService()), $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status'], ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()));
    }
}
