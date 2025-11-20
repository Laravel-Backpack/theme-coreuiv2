<?php

namespace Backpack\ThemeCoreuiv2;

use Backpack\Basset\Facades\Basset;
use Backpack\CRUD\ThemeServiceProvider;

class AddonServiceProvider extends ThemeServiceProvider
{
    protected string $vendorName = 'backpack';
    protected string $packageName = 'theme-coreuiv2';

    public function boot(): void
    {
        $this->autoboot();
    }
}
