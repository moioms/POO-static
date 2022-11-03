<?php

class Speedometer
{
    private int $kilometer;
    private int $miles;

    public const MILES_CONVERSION = 1.609344;

    public const KILOMETER_CONVERSION = 1.609344;

    public static function ConvertKmToMiles(int $miles): ?float
    {
        return number_format($miles / self::KILOMETER_CONVERSION, 2);
    }

    public static function ConvertMilesToKm(int $kilometer): ?float
    {
        return number_format($kilometer * self::MILES_CONVERSION, 2);
    }
}
