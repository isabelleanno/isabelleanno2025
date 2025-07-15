<?php

namespace App\Bundle\CustomAdminBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CustomAdminBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        // This bundle will handle admin customizations
        $container->setParameter('custom_admin.bundle_loaded', true);
    }
}
