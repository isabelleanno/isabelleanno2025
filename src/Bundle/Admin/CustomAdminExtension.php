<?php

namespace App\Bundle\CustomAdminBundle\Admin;

use Sulu\Bundle\AdminBundle\Admin\Admin;
use Sulu\Bundle\AdminBundle\Admin\View\ViewBuilderFactoryInterface;

class CustomAdminExtension extends Admin
{
    public function __construct(ViewBuilderFactoryInterface $viewBuilderFactory)
    {
        parent::__construct($viewBuilderFactory);
    }

    public function getJsBundleName(): ?string
    {
        return 'custom-admin';
    }
}
