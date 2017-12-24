<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/24/2017
 * Time: 9:44 AM
 */

//error-fatal,warning, parse,notice
//neumaric array, assusiative array, multidimentional

//$data=[10,20,30,'Shaikot','shukrabadh'];
//$data[0]=10;
//$data[1]=20;
//$data[2]=30;
//
//$data['name']='Shaikot';
//$data['city']='shukrabadh';
//$data['country']='Bangladesh';
//$data=[
//    'name'=>'Shaikot',
//    'city'=>'Dhaka',
//    'country'=>'Bangladesh',
//    'phone'=>'01985986986',
//    'gender'=>'male',
//];
//
//$data=[];
//
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;
//
//$data[1][0]=40;
//$data[1][1]=50;
//$data[1][2]=60;
//
//$data[2][0]=70;
//$data[2][1]=70;
//$data[2][2]=90;
//
//$data[3][0]=100;
//$data[3][1]=110;
//$data[3][2]=120;

//foreach ($data as $value){
////    echo $value[0]." ".$value[1]." ". $value[2]."<br/>";
//    foreach ($value as $v_value){
//        echo $v_value." ";
//    }
//    echo "<br/>";
//}
// supper global array $_

//function demo($fName=null, $lName=null){
////    $fName="Shaikot";
////    $lName="Zahid";
//    $fullName=$fName.' '.$lName;
////    echo  $fullName;
//    return  $fullName;
//}
//
//echo demo('Zahid','Shaikot');
//echo "<br/>";
//echo demo('Shaikot');
//
//$res=demo('Zahid','Shaikot');
//echo "<br/>";
//echo demo('Full Name is: '.$res);


//demo('Zahid','Shaikot');

//phpinfo();

//echo "<pre>";
//var_dump($data);
//echo "<pre/>";

//echo $data['name'];

//echo "<pre>";
//print_r($data);
//echo "<pre/>";

//foreach($data as $value){
//echo $value. "<br/> ";}


/**OOP
 *class
 *object
 *property
 *method
 *encapsulation
 *inheritance
 *abstraction
 *namespace
 *polymorphism
 */

class DemoTwo{
    public $name='Shaikot';
    protected $city='Dhaka';

    function  add(){
        echo "In add";
    }

    function  sub(){
        echo "In sub";
    }

}

$demo=new DemoTwo;
$demo->add();
echo $demo->name;

?>