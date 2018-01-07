<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/7/2018
 * Time: 9:29 AM
 */

namespace App\classes;


class Info
{
    private function dbconn(){
        $hostName="localhost";
        $username="root";
        $password="";
        $db="blog";
        $link=mysqli_connect($hostName,$username,$password,$db);
        return $link;
    }
    public function addInfo($data){

        $sql="INSERT INTO info(blog_title, author_name, blog_description, status) VALUES ('$data[blog_title]','$data[author_name]','$data[blog_description]','$data[status]')";
        if(mysqli_query(Info::dbconn(),$sql)){
            $message="Insert Successfully";
            return $message;

        }else{
            die("Query problem".mysqli_error(Info::dbconn()));
        }
    }
    public function viewInfo(){
        $sql="SELECT * FROM info";
        if(mysqli_query(Info::dbconn(),$sql)){
            $queryResult=mysqli_query(Info::dbconn(),$sql);
            return $queryResult;
        }else{
            die("Query Problem".mysqli_error(Info::dbconn()));
        }
    }
    public function getInfo($id){
        $sql="select * from info where id=$id";
        if(mysqli_query(Info::dbconn(),$sql)){
            $result=mysqli_query(Info::dbconn(),$sql);
            return $result;
        }
        else{die('query prob');}
    }
    public function editInfo($data){
        $sql="UPDATE `info` SET `blog_title`='$data[blog_title]',`author_name`='$data[author_name]',`blog_description`='$data[blog_description]',`status`='$data[status]' WHERE id=$data[id]";
        if(mysqli_query(Info::dbconn(),$sql)){
            header('Location: viewInfo.php');
        }else{die("query prob");}
    }

    public function deleteInfo($id){
        $sql="delete from info where id=$id";
        if(mysqli_query(Info::dbconn(),$sql)){
            $message="Delete Successfully";
            return $message;

        }else{
            die("Query problem".mysqli_error(Info::dbconn()));
        }
    }
}