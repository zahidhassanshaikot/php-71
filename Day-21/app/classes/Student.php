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
    private function dbConnection()
    {
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='bitm';
        $link=mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }

    public function saveStudentInfo($data)
    {

//        echo '<pre>';
//        print_r($link);
        $sql="INSERT INTO student(name, email, mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

        if(mysqli_query(Student::dbConnection(),$sql)){
            $message="Student if save successfully";
            return $message;

        }else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }

    }

    public function getAllStudent(){

        $sql="SELECT * FROM student";
        if(mysqli_query(Student::dbConnection(),$sql)){
            $queryResult=mysqli_query(Student::dbConnection(),$sql);
//            echo '<pre>';
//            print_r($queryResult);

            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }

    }
    public function getStudentInfoByID($id){
        $sql="SELECT * FROM student WHERE id='$id'";
        if(mysqli_query(Student::dbConnection(),$sql)){
            $queryResult=mysqli_query(Student::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }

    public function updateStudentInfo($data){
        $sql="UPDATE student SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$data[id]'";
        if(mysqli_query(Student::dbConnection(),$sql)){
            header('Location: view-student.php');
        }else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }

    public function deleteStudentInfo($id){
        $sql="DELETE FROM student where id='$id'";
        if(mysqli_query(Student::dbConnection(),$sql)){
            $message="Student if Delete successfully";
            return $message;

        }else{
            die('Query Problem'.mysqli_error(Student::dbConnection()));
        }
    }

}