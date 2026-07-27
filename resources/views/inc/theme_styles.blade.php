@basset('https://cdn.jsdelivr.net/npm/noty@3.2.0-beta-deprecated/lib/noty.css', true, ['integrity' => 'sha256-dfOQcvfduHjwxemginIeingtMCnG35zrDhpluwxCe/U=', 'crossorigin' => 'anonymous'])

{{-- CoreUI 2 CSS --}}
@basset('https://cdn.jsdelivr.net/npm/@digitallyhappy/backstrap@0.5.1/dist/css/legacy.min.css', true, ['integrity' => 'sha384-JZChMdvSKDQzhyLHIRN9IR9eigXQIhZ4CFYpO3fKZUN20e1m8M/cvLa1c9vbaaK+', 'crossorigin' => 'anonymous'])

{{-- Source Sans Font | this definition shouldn't change as the inclusion of the font in css depends on relative file paths --}}
@bassetDirectory(base_path('vendor/backpack/theme-coreuiv2/resources/assets/fonts/source-sans-pro'), 'source-sans-pro')

{{-- This file path shouldn't change as the inclusion of the font in css depend on this file relative path --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/source-sans-pro.css'))

{{-- Custom Backpack Rules --}}
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/coreuiv2.css'))

{{-- Select2 Bootstrap 3/4 theme (only needed for CoreUI v2) --}}
@basset('https://cdn.jsdelivr.net/npm/select2-bootstrap-theme@0.1.0-beta.10/dist/select2-bootstrap.min.css')