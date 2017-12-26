<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 11:54 AM
 */
class Example
{
    public $name = "moshiur Rahman";
    protected $city = "Dhaka";
    private $country = "Bangladesh";
    private $value;
//
//    public function __construct($data)
//    {
//        $this->value = $data;
//    }

    public function addition()
    {

        echo 'In addition';
//        echo $this->value;
//        $this->div();
    }

    protected function sub()
    {
        echo 'In sub';
    }

    private function div()
    {
        echo 'In div';
    }


}