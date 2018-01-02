<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/2/2018
 * Time: 10:54 AM
 */

namespace App\classes;


class student
{
    public function saveStudentInfo($data)
    {

        $link=mysqli_connect('localhost','root','','bitm');

//        echo '<pre>';
//        print_r($link);
        $sql="INSERT INTO student(name, email, mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query($link,$sql)){
            $message="Student if save successfully";
            return $message;

        }else{
            die('Query Problem'.mysqli_error($link));
        }


    }

    public function getAllStudent(){
        $link=mysqli_connect('localhost','root','','bitm');
        $sql="SELECT * FROM student";
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