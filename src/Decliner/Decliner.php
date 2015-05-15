<?php
/**
 * Author: <sfdiem5@gmail.com>
 * Date: 14.05.15
 */

namespace Decliner;

class Decliner
{
    /**
     * @param int $number
     * @param Declinable\Word $word
     * @return string
     */
    public static function on($number, Declinable\Word $word)
    {
        $number = self::normalize($number);

        switch (true) {
            case static::isPlural($number):
                return $number . ' ' . $word->getPlural();
                break;
            case static::isGenetiv($number):
                return $number . ' ' . $word->getGenetiv();
                break;
            default:
                return $number . ' ' . $word->getNominativ();
                break;
        }
    }

    /**
     * @param int $number
     * @return bool
     */
    private static function isPlural($number)
    {
        $remainderOfTen = $number % 10;
        $remainderOfHundred = $number % 100;

        return ($number > 10 && ($remainderOfHundred - ($remainderOfHundred % 10)) / 10 == 1) ||
               ($remainderOfTen == 0 || $remainderOfTen >= 5);
    }

    /**
     * @param int $number
     * @return bool
     */
    private static function isGenetiv($number)
    {
        return $number % 10 >= 2;
    }

    /**
     * @param $number
     * @return number
     */
    private static function normalize($number)
    {
        return abs(floor($number));
    }
}
