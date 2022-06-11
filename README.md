# GeoData
A simple class that provides access to country & state list.

## Installation
```
composer require ahmard/geodata
```

## Usage

```php
<?php

use Ahmard\GeoData\Country;

require __DIR__ . '/vendor/autoload.php';

$countries = Country::all();

$states = Country::getStates(160);

var_dump($states);
```