# GeoData
A simple class that provides access to country & state list.

## Installation
```
composer require ahmard/geodata
```

## Usage

### Fetch country list
```php
<?php

use Ahmard\GeoData\Country;

require __DIR__ . '/vendor/autoload.php';

$countries = Country::all();

var_dump($countries);
```

### Get country by phone code
```php
<?php

use Ahmard\GeoData\Country;

require __DIR__ . '/vendor/autoload.php';

$countryInfo = Country::getByPhoneCode(234);

var_dump($countryInfo);
```

### Get country states
```php
<?php

use Ahmard\GeoData\Country;

require __DIR__ . '/vendor/autoload.php';

$states = Country::getStates(160);

var_dump($states);
```