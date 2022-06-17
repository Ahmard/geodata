<?php

namespace Ahmard\GeoData;

use InvalidArgumentException;

class Country
{
    public static function all(): array
    {
        return require dirname(__DIR__) . '/raw/countries.php';
    }

    public static function getByPhoneCode(int $phoneCode): array
    {
        $countriesByPhoneCode = require dirname(__DIR__) . '/raw/countries-phone-codes-to-index.php';

        if (!array_key_exists($phoneCode, $countriesByPhoneCode)) {
            throw new InvalidArgumentException("Country with phone code '$phoneCode' does not exists.");
        }

        $countries = (require dirname(__DIR__) . '/raw/countries.php');
        return $countries[$countriesByPhoneCode[$phoneCode]];
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