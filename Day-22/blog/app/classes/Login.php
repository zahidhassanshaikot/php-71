<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/7/2018
 * Time: 11:57 AM
 */

namespace App\classes;
use App\classes\Database;

class Login
{
public function adminLoginCheck($data){

    $email=$data['email'];
    $password=md5($data['password']);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    if(mysqli_query(Database::dbConnection(),$sql)){
        $queryResult=mysqli_query(Database::dbConnection(),$sql);
        $user=mysqli_fetch_assoc($queryResult);
//        echo "<pre>";
//        print_r($user);
        if($user){
            header('Location:dashboard.php');
        }else{
            $message="please use valid email address and password";
            return $message;
        }
    }else{die("Query Problem.".mysqli_error(Database::dbConnection()));}

}
}