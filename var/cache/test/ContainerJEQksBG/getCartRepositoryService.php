<?php

namespace ContainerJEQksBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Repository\CartRepository' shared autowired service.
     *
     * @return \App\Repository\CartRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Cart/CartService.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/CartRepository.php';

        return $container->privates['App\\Repository\\CartRepository'] = new \App\Repository\CartRepository(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}