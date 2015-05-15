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
     * @param Declinabe\Word $word
     * @return string
     */
    public static function on($number, Declinabe\Word $word)
    {
        $number = self::normalize($number);

        switch ($number % 10) {
            case 1:
                return $number . ' ' . $word->getNominativ();
                break;
            case 2:
            case 3:
            case 4:
                return $number . ' ' . $word->getGenetiv();
                break;
            default:
                return $number . ' ' . $word->getPlural();
            break;

        }
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
