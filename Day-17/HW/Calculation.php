<?php
/**
 * Created by PhpStorm.
 * User: DIU
 * Date: 12/26/2017
 * Time: 8:38 PM
 */

class Calculation
{
    function makeResult($firstNum, $secondNum)
    {
        $store = '';

        if ($firstNum < $secondNum) {
            for ($firstNum; $firstNum <= $secondNum; $firstNum++) {
//            $store[]=$firstNum;
                $store = $store . ' ' . $firstNum;

            }
        } elseif ($firstNum > $secondNum) {
            for ($firstNum; $firstNum >= $secondNum; $firstNum--) {
//            $store[]=$firstNum;
                $store = $store . ' ' . $firstNum;

            }
        }
        return $store;

    }

    function makeResult2($firstNum, $secondNum, $option)
    {
//        echo '<pre>';
//        print_r();

        $store = '';
        if ($option == 1) {
            for ($firstNum; $firstNum <= $secondNum; $firstNum++) {
//            $store[]=$firstNum;
                if ($firstNum %2== 1) {
                    $store = $store . ' ' . $firstNum;
                }
            }
        } elseif ($option == 0) {
            for ($firstNum; $firstNum <= $secondNum; $firstNum++) {
//            $store[]=$firstNum;
                if ($firstNum %2 == 0) {
                    $store = $store . ' ' . $firstNum;
                }
            }
        }
        return $store;
    }
}