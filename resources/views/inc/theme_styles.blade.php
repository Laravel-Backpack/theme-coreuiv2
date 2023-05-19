@basset('https://unpkg.com/@digitallyhappy/backstrap@0.5.1/dist/css/legacy.css')
@basset('https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css')
@basset(base_path('vendor/backpack/theme-coreuiv2/resources/assets/css/coreuiv2.css'))

{{-- Source Sans Font --}}
@bassetArchive('https://github.com/adobe-fonts/source-sans/releases/download/3.046R/WOFF2-source-sans-3.046R.zip', 'source-sans-pro')
@basset(base_path('vendor/backpack/crud/src/resources/assets/libs/source-sans-pro.css'), 'source-sans-pro/source-sans-pro.css')

<link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap"
      rel="stylesheet">
{{-- TODO: We should use Basset for Google Fonts too, but it doesn't quite work yet: --}}
{{-- @basset('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400&display=swap',
true, [], 'style') --}}