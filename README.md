# Silverstripe Country Dropdown Field

A simple country dropdown field for SilverStripe forms.

[![CI](https://github.com/dynamic/silverstripe-country-dropdown-field/actions/workflows/ci.yml/badge.svg)](https://github.com/dynamic/silverstripe-country-dropdown-field/actions/workflows/ci.yml) [![Sponsors](https://img.shields.io/badge/GitHub-Sponsors-ff69b4?logo=github)](https://github.com/sponsors/dynamic)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-country-dropdown-field/v/stable)](https://packagist.org/packages/dynamic/silverstripe-country-dropdown-field)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-country-dropdown-field/downloads)](https://packagist.org/packages/dynamic/silverstripe-country-dropdown-field)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-country-dropdown-field/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-country-dropdown-field)
[![License](https://poser.pugx.org/dynamic/silverstripe-country-dropdown-field/license)](https://packagist.org/packages/dynamic/silverstripe-country-dropdown-field)

## Requirements

- PHP: ^8.3
- silverstripe/recipe-core: ^6

## Installation

`composer require dynamic/silverstripe-country-dropdown-field`

## Usage

`CountryDropdownField` extends SilverStripe's `DropdownField` and populates its source with a full list of countries drawn from SilverStripe's `IntlLocales` service. Use it anywhere you would use a standard form field:

```php
use Dynamic\CountryDropdownField\Form\CountryDropdownField;

$fields->addFieldToTab(
    'Root.Main',
    CountryDropdownField::create('Country', 'Country')
);
```

You can also supply a custom country list by passing a source array as the third argument, just like a standard `DropdownField`.

## Features

- **Country Dropdown**: Pre-configured dropdown field with all countries
- **Intl Integration**: Uses SilverStripe's `IntlLocales` for standardized country data
- **Customizable Source**: Optional custom country list support
- **Form Field Extension**: Extends SilverStripe's `DropdownField` for seamless integration

## Maintainers

 *  [Dynamic](https://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker

Bugs are tracked in the issues section of this repository. Before submitting an issue please read over existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

## License

See [License](LICENSE.md)
