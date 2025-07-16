@basset('https://cdn.jsdelivr.net/npm/noty@3.2.0-beta-deprecated/lib/noty.min.css', true, ['integrity' => 'sha384-06UJlYrXGflQ8SjYDEf63SOUEuaWJ16nmd3nj6pttaS27WbGGJH0D1zJc0EokKhB', 'crossorigin' => 'anonymous'])

{{-- CoreUI 2 CSS --}}
@basset('https://cdn.jsdelivr.net/npm/@digitallyhappy/backstrap@0.5.1/dist/css/legacy.min.css', true, ['integrity' => 'sha384-JZChMdvSKDQzhyLHIRN9IR9eigXQIhZ4CFYpO3fKZUN20e1m8M/cvLa1c9vbaaK+', 'crossorigin' => 'anonymous'])

{{-- Source Sans Font | this definition shouldn't change as the inclusion of the font in css depends on relative file paths --}}
@bassetDirectory(base_path('vendor/backpack/theme-coreuiv2/resources/assets/fonts/source-sans-pro'), 'source-sans-pro')

{{-- This file path shouldn't change as the inclusion of the font in css depend on this file relative path --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/source-sans-pro.css'))

{{-- Custom Backpack Rules --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/coreuiv2.css'))