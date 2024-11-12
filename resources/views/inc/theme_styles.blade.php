@basset('bp-noty-css')
@basset('bp-coreui2-css')

{{-- Source Sans Font | this definition shouldn't change as the inclusion of the font in css depends on relative file paths --}}
@bassetDirectory(base_path('vendor/backpack/theme-coreuiv2/resources/assets/fonts/source-sans-pro'), 'source-sans-pro')

{{-- This file path shouldn't change as the inclusion of the font in css depend on this file relative path --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/source-sans-pro.css'))

{{-- Custom Backpack Rules --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/coreuiv2.css'))