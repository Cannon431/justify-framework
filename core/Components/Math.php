<?php

namespace Core\Components;

/**
 * Class Math
 *
 * Methods for working with math
 *
 * @package Justify\Components
 */
class Math
{
    /**
     * Field array arithmetic progression
     *
     * @param integer $length length of array
     * @param integer $d arithmetic progression difference
     * @param integer $start the number from which the array begins to fill
     * @return array
     */
    public static function fillArithmeticProgression($length, $d, $start = 0)
    {
        $array = [$start];
        
        for ($i = 1; $i < $length; $i++) {
            $array[$i] = $array[$i - 1] + $d;
        }

        return $array;
    }

    /**
     * Field array geometric progression
     *
     * @param integer $length length of array
     * @param integer $q denominator of geometric progression
     * @param integer $start the number from which the array begins to fill
     * @return array
     */
    public static function fillGeometricProgression($length, $q, $start = 1): array
    {
        $array = [$start];

        for ($i = 1; $i < $length; $i++) {
            $array[$i] = $array[$i - 1] * $q;
        }

        return $array;
    }

    /**
     * Returns sum of terms of infinitely decreasing geometric progression
     *
     * @param float $b1 the first term of a geometric progression
     * @param float $q denominator of geometric progression
     * @return int|boolean
     */
    public static function sumOfTermsOfIDGP($b1, $q)
    {
        return $q > 0 && $q < 1 ? $b1 / (1 - $q) : false;
    }

    /**
     * Returns discriminant
     *
     * @param float|int $a a
     * @param float|int $b b
     * @param float|int $c c
     * @return float|int
     */
    public static function discriminant($a, $b, $c)
    {
        return pow($b, 2) - 4 * $a * $c;
    }

    /**
     * Returns factorial of number
     *
     * @since 2.0
     * @param int $x number
     * @return int
     */
    public static function factorial($x)
    {
        $factorial = 1;

        for ($i = 2; $i <= $x; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }

    /**
     * Returns number of Fibonacci
     *
     * @since 2.0
     * @param int $x position
     * @return int
     */
    public static function fibonacci($x)
    {
        if (in_array($x, [0, 1])) {
            return $x;
        }

        $numbers = [1, 1];
        for ($i = 2; $i < $x; $i++) {
            $numbers[] = $numbers[$i - 1] + $numbers[$i - 2];
        }

        return array_pop($numbers);
    }

    /**
     * Returns arithmetic average of array of numbers
     *
     * @param array $numbers array of numbers
     * @return int|float
     */
    public static function average(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }

    /**
     * Returns percentage of 2 numbers
     *
     * @since 2.0
     * @param float|int $a1
     * @param float|int $a2
     * @return float|int
     */
    public static function percentage($a1, $a2)
    {
        return $a1 / $a2 * 100;
    }

    /**
     * Checks number to even
     * 
     * If number even then will be return true
     * else will be return false
     * 
     * @param float $number checks number
     * @return boolean
     */
    public static function isEven($number)
    {
        return $number % 2 == 0;
    }

    /**
     * Checks number to odd
     * 
     * If number odd then will be return true
     * else will be return false
     * 
     * @param float $number checks number
     * @return boolean
     */
    public static function isOdd($number)
    {
        return $number % 2 != 0;
    }

    /**
     * Increments and returns number
     *
     * @since 2.2.0
     * @param int &$number
     * @return int
     */
    public static function inc(&$number)
    {
        return ++$number;
    }

    /**
     * Decrements and returns number
     *
     * @since 2.2.0
     * @param int &$number
     * @return int
     */
    public static function dec(&$number)
    {
        return --$number;
    }
}
