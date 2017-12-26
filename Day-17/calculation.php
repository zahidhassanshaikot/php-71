<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 10:26 AM
 */
class Calculation
{
    function myCalculation($data)
    {
//        echo '<pre>';
//        print_r($data);

        $btn=$data['btn'];

        switch ($btn){
            case '+': $result=$data['first_num']+$data['second_num'];break;
            case '-': $result=$data['first_num']-$data['second_num'];break;
            case '*': $result=$data['first_num']*$data['second_num'];break;
            case '/': $result=$data['first_num']/$data['second_num'];break;
            case '%': $result=$data['first_num']%$data['second_num'];break;
    }
        return $result;

    }
}