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

        Basset::map('bp-coreui2-js', 'https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.js', [
            'integrity' => 'sha384-bGN26a2hALMr37vQOOCndM/bUxTsyEga9Xy63H3F8X/fsJcms/kxBkQTqxj6azVB',
            'crossorigin' => 'anonymous',
        ]);

        Basset::map('bp-coreui2-css', 'https://unpkg.com/@digitallyhappy/backstrap@0.5.1/dist/css/legacy.css', [
            'integrity' => 'sha384-DiDxWRXW1Tj+C7hh6JNbSgBbCoY0DrGfZpGWHbhESuti8Mwr5ShP6Edqa+cqLz0p',
            'crossorigin' => 'anonymous',
        ]);
    }
}
