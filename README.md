
# Pola5h/FlagIcons

A Laravel package for country and language flag icons using the Twitter Emoji Twemoji Set.

## Installation

You can install the package via Composer. Run the following command:

```bash
composer require pola5h/laravel-flags
```

### Service Provider
If you are using Laravel 5.5 or later, the package will automatically register the service provider. For earlier versions, add the service provider to your `config/app.php` file:

```php
'providers' => [
    // Other service providers...
    FlagIcons\FlagIconsServiceProvider::class,
];
```

### Blade Component Usage
You can use the Blade component to display flag icons. The component supports displaying both country and language flags.

#### Syntax
```blade
<x-flag-icon type="country" code="bd" width="10px" height="10px" />
<x-flag-icon type="language" code="bn" width="10px" height="10px" />
```

#### Parameters
- **type**: The type of flag. Use "country" for country flags and "language" for language flags.
- **code**: The ISO 2 code for the flag (e.g., "bd" for Bangladesh, "bn" for Bengali language).
- **width** (optional): The width of the flag icon. Defaults to "auto".
- **height** (optional): The height of the flag icon. Defaults to "auto".

### Example

To display the flag of Bangladesh with a width of 10px and height of 10px:

```blade
<x-flag-icon type="country" code="bd" width="10px" height="10px" />
```

To display the Bengali language flag with a width of 10px and height of 10px:

```blade
<x-flag-icon type="language" code="bn" width="10px" height="10px" />
```

## License
This package is licensed under the MIT License. See the LICENSE file for more details.

## Author
Kamruzzaman Polash (GitHub: @pola5h)

## Acknowledgements
This package uses the Twitter Emoji Twemoji Set for flag icons.
