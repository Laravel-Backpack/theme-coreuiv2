@basset('https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css')
@basset('https://cdn.jsdelivr.net/npm/@digitallyhappy/backstrap@0.5.1/dist/css/legacy.css')

{{-- Source Sans Font | this definition shouldn't change as the inclusion of the font in css depends on relative file paths --}}
@bassetArchive(base_path('vendor/backpack/theme-coreuiv2/resources/assets/fonts/source-sans-3.052R.tar.gz'), 'source-sans-pro')

{{-- This file path shouldn't change as the inclusion of the font in css depend on this file relative path --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/source-sans-pro.css'))

{{-- Custom Backpack Rules --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/coreuiv2.css'))