<?php
/**
 * Created by PhpStorm.
 * User: DIU
 * Date: 1/2/2018
 * Time: 9:30 PM
 */

namespace App\classes;


class Registration
{
    public function addInfo($data){
        $link=mysqli_connect("localhost", "root", "", "info");
        $sql="INSERT INTO reghistory(first_name, last_name, email, password, phone_number, date_of_birth, gender, Address) VALUES ('$data[first_name]', '$data[last_name]','$data[email]','$data[password]','$data[phone_number]','$data[date_of_birth]','$data[gender]','$data[Address]')";

        if(mysqli_query($link,$sql)){
            $message="Information save successfully";
            return $message;

        }else{
            die('Query Problem. '.mysqli_error($link));
        }
    }

    public function getAllInfo(){
        $link=mysqli_connect('localhost','root','','info');
        $sql="SELECT `id`, `first_name`, `last_name`, `email`, `phone_number`, `date_of_birth`, `gender`, `Address` FROM `reghistory`";
        if(mysqli_query($link,$sql)){
            $queryResult=mysqli_query($link,$sql);
//            echo '<pre>';
//            print_r($queryResult);

            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error($link));
        }

    }

}