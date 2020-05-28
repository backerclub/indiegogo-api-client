# Indiegogo Scraper
[![Latest Version on Packagist](https://img.shields.io/packagist/v/backerclub/indiegogo.svg?style=flat-square)](https://packagist.org/packages/backerclub/indiegogo)
![](https://github.com/backerclub/indiegogo/workflows/Run%20Tests/badge.svg?branch=master)
[![StyleCI](https://styleci.io/repos/267051210/shield)](https://styleci.io/repos/267051210)
[![Total Downloads](https://img.shields.io/packagist/dt/backerclub/indiegogo.svg?style=flat-square)](https://packagist.org/packages/backerclub/indiegogo)

An unofficial PHP Client for Indiegogo's public API
https://developer.indiegogo.com/docs/

## Usage
You can find examples of each API method used in the examples folder.

Add the unofficial package to your project. 
```bash
composer require backerclub/indiegogo
``` 

Create the Indiegogo client by passing in a well formed Auth object and call the method you desire to get results for.
```php
<?php
$auth = new \Indiegogo\Entity\Auth(
    'email@example.com',
    'password-goes-here',
    'api-token-goes-here'
);

$indiegogo = new \Indiegogo\Client($auth);

$campaigns = $indiegogo->campaigns();
```

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits
* [All Contributors](https://github.com/backerclub/Indiegogo/graphs/contributors)

## Similar Packages
* https://github.com/tiamo/indiegogo

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
