<?php

namespace App\Bundle\CustomAdminBundle\Service;

class GreetingService
{
    public function sayHello(string $name): string
    {
        return "👋 Hello {$name} from CustomAdminBundle!";
    }
}
