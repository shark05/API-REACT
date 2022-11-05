<?php

namespace ContainerU4YBpQi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_DocumentationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.documentation' shared service.
     *
     * @return \ApiPlatform\Documentation\Action\DocumentationAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Documentation/Action/DocumentationAction.php';

        return $container->services['api_platform.action.documentation'] = new \ApiPlatform\Documentation\Action\DocumentationAction(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), '', '', '0.0.0', ($container->privates['api_platform.openapi.factory'] ?? $container->load('getApiPlatform_Openapi_FactoryService')));
    }
}
