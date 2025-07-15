<?php

namespace App\Bundle\CustomAdminBundle;

use App\Bundle\CustomAdminBundle\Service\GreetingService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CustomAdminBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        // Register a service in the container (blueprint phase) and make it PUBLIC
        $definition = $container->register('learning.greeting', GreetingService::class);
        $definition->setPublic(true);  // ← This is the missing piece!

        $container->setParameter('learning.default_name', 'Learner');

        echo "🔨 Registered GreetingService in container\n";
    }

    public function boot(): void
    {
        // Use the service from the container (runtime phase)
        $greeting = $this->container->get('learning.greeting');
        $defaultName = $this->container->getParameter('learning.default_name');

        echo "🚀 " . $greeting->sayHello($defaultName) . "\n";
    }
}
