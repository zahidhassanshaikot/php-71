<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 12:42 PM
 */

require_once 'Example.php';
class Demo extends Example
{

    public $age = 22;
    protected $location = 'Shukrabadh';
    private $mobile = '01985986986';

    public function newOne()
    {
//        echo 'new oNE';
        $this->sub();
    }

    Protected function newtwo()
    {
        echo 'new two';
    }

    private function newthree()
    {
        echo 'new three';
    }


}