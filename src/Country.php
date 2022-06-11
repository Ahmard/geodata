<?php

namespace Ahmard\GeoData;

use InvalidArgumentException;

class Country
{
    public static function all(): array
    {
        return require dirname(__DIR__) . '/raw/countries.php';
    }

    public static function getStates(int $countryId): array
    {
        $filePath = dirname(__DIR__) . "/raw/states/c$countryId.php";

        if (!file_exists($filePath)) {
            throw new InvalidArgumentException("Country with id '$countryId' does not exists.");
        }

        return require $filePath;
    }
}