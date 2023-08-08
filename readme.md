# Theme CoreUI v2

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides a Theme for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel, that uses CoreUI v2 and implicitly Bootstrap v4. As a UI (aka UI kit, aka admin panel template) it looks and works as seen on https://backstrap.net/ - as it is a customized version of CoreUI v2.

It has been launched in 2021 as part of Backpack's core. In 2023 it has been sparated into this package, as a way to provide 100% backwards-compatibility, for whoever doesn't want to upgrade to the newer themes, like CoreUI v4 and Tabler.

Why would anybody NOT want to upgrade? Well... because some developers:
- have to support IE; and while Bootstrap v5 is better in every way... it does drop support for IE;
- have customized their blade files so much, that it's impossible to upgrade;

If you're one of the developers above, fear not... this package offers a way for you to upgrade your project to Backpack v6... while not rocking the boat too much. Please keep in mind we DO NOT plan to add any more features to this theme. It's just here as a crutch for people who can't upgrade.

## Screenshots

![CleanShot 2023-06-30 at 18 19 46](https://github.com/Laravel-Backpack/theme-coreuiv2/assets/1032474/6b8892cd-97c2-453b-aff4-90da092c5268)

## Installing

### Automatic installation

Because this a 1st party theme, you can quickly install it using

```
php artisan backpack:require:theme-coreuiv2
```

Alternatively, follow the manual installation process below.

## Manual installation

**Step 1.** Install via Composer

``` bash
composer require backpack/theme-coreuiv2
```

**Step 2.** Go to `config/backpack/ui.php` and change your view namespace:

```diff
-    'view_namespace' => 'backpack::',
+    'view_namespace' => 'backpack.theme-coreuiv2::',
```

**Step 3. (Optional)** Publish the theme config file:

```bash
php artisan vendor:publish --tag="theme-coreuiv2-config"
```

## Uninstalling

To uninstall this Backpack theme:

1. Remove the composer package. Eg. `composer remove backpack/theme-coreuiv2`
2. Delete the config file. Eg. `rm -rf config/backpack/theme-coreuiv2.php`
3. Install a new theme (eg. `php artisan backpack:require:theme-coreuiv4`) or change the `view_namespace` in `config/backpack/ui.php` to the theme you want to be active.

## Overriding

If you need to change a blade file in any way, you can easily copy-paste the file to your app, and modify that file any way you want. If you do that to the correct directory, your file will be used instead of the one in the package. But please keep in mind that you will NOT be getting any updates for that file.

The more files you copy-paste and customize, the more difficult it will be to upgrade to newer versions. So please avoid doing this too much.

```bash
# create the custom directory if it's not already there
mkdir -p resources/views/vendor/backpack/theme-coreuiv2

# copy the blade file inside the folder we created above
cp -i vendor/backpack/theme-coreuiv2/src/resources/views/dashboard.blade.php resources/views/vendor/backpack/theme-coreuiv2/dashboard.blade.php
```

## Customizing

In ```config/backpack/theme-coreuiv2.php``` you'll notice there are variables where you can change exactly what CSS classes are placed on the HTML elements that represent the header, body, sidebar and footer:

```php
    // Horizontal navbar classes. Helps make the admin panel look similar to your project's design.
    'header_class' => 'app-header bg-light border-0 navbar',
        // Try adding bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan
        // You might need to add "navbar-dark" too if the background color is a dark one.
        // Add header-fixed if you want the header menu to be sticky

    // Body element classes.
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
        // Try sidebar-hidden, sidebar-fixed, sidebar-compact, sidebar-lg-show


    // Sidebar element classes.
    'sidebar_class' => 'sidebar sidebar-pills bg-light',
        // Remove "sidebar-transparent" for standard sidebar look
        // Try "sidebar-light" or "sidebar-dark" for dark/light links
        // You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan

    // Footer element classes.
    'footer_class' => 'app-footer',
```

Our default design might not be pleasant for your, or you might need to make the UI integrate better into your project. We totally understand. You can use the classes above to make it look considerably different.

You'll find a few examples below - but you should use which classes you want to get the result you need.

<a href="ui-with-dark-sidebar"></a>
#### Backstrap

Transparent top menu, transparent sidebar, transparent footer. This is the default. This is what _we_ think is best for most users, from our 8+ years of experience building admin panels. Prioritising _content_ over _menus_.

![Backstrap design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/default.png)

```php
    'header_class' => 'app-header bg-light border-0 navbar',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar sidebar-pills bg-light',
    'footer_class' => 'app-footer',
```

<a href="inspired-by-coreui"></a>
#### Inspired by CoreUI

White top menu, dark sidebar.

![CoreUI design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/coreui.png)

```php
    'header_class' => 'app-header navbar',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar',
    'footer_class' => 'app-footer d-none',
```

<a href="inspired-by-github"></a>
#### Inspired by GitHub

Black top menu, white sidebar.

![CoreUI design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/github.png)

```php
    'header_class' => 'app-header bg-dark navbar',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar bg-white sidebar-pills',
    'footer_class' => 'app-footer d-none',
```

<a href="blue-top-menu"></a>
#### Blue Top Menu

Blue top menu, dark sidebar.

![Construction or warning design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/blue.png)

```php
    'header_class' => 'app-header navbar navbar-color bg-primary border-0',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar', // add "bg-white sidebar-pills" for light sidebar
    'footer_class' => 'app-footer d-none',
```


<a href="inspired-by-contruction"></a>
#### Construction / Warning

Yellow top menu, dark sidebar.

![Construction or warning design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/construction.png)

```php
    'header_class' => 'app-header navbar navbar-light bg-warning',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar', // add "bg-white sidebar-pills" for light sidebar
    'footer_class' => 'app-footer d-none',
```

<a href="red-top-menu"></a>
#### Red Top Menu

Red top menu, dark sidebar.

![Construction or warning design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/red.png)

```php
    'header_class' => 'app-header navbar navbar-color bg-error border-0',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar', // add "bg-white sidebar-pills" for light sidebar
    'footer_class' => 'app-footer d-none',
```

<a href="pink-top-menu"></a>
#### Pink Top Menu

Pink top menu, transparent sidebar.

![Construction or warning design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/pink.png)

```php
    'header_class' => 'app-header navbar navbar-color bg-error border-0',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar sidebar-pills bg-light',
    'footer_class' => 'app-footer d-none',
```


<a href="green-top-menu"></a>
#### Green Top Menu

Green top menu, white sidebar.

![Construction or warning design](https://backpackforlaravel.com/uploads/docs-4-0/ui/examples/green.png)

```php
    'header_class' => 'app-header navbar navbar-color bg-green border-0',
    'body_class' => 'app aside-menu-fixed sidebar-lg-show',
    'sidebar_class' => 'sidebar sidebar-pills bg-white',
    'footer_class' => 'app-footer d-none',
```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/backpack/theme-coreuiv2/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email hello@backpackforlaravel.com instead of using the issue tracker.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/backpack/theme-coreuiv2.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/backpack/theme-coreuiv2.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/backpack/theme-coreuiv2
[link-downloads]: https://packagist.org/packages/backpack/theme-coreuiv2
[link-author]: https://github.com/backpack
[link-contributors]: ../../contributors
