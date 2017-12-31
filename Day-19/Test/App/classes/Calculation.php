<?php
namespace App\classes;

class calculation
{
    function cal($str){

        $stringLength=strlen($str['str']);
        $worldLength=str_word_count($str['str']);
        $result=[
            'stringLength'=>$stringLength,
            'worldLength'=>$worldLength,
        ];
        return $result;
    }
}