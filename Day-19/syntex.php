<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/31/2017
 * Time: 9:24 AM
 */

//require_once 'App\classes\Student.php';
//require_once 'App\classes\Calculation.php';
require_once 'vendor/autoload.php';
use App\classes\Calculation;

use App\classes\Student;
Student::addition();

//$result=[
//    'stringLength'=>'',
//    'worldLength'=>'',
//];
//if (isset($_POST['btn'])) {
//   $calculation=new App\classes\Calculation();
//    $result= $calculation->cal($_POST);
//}

if (isset($_POST['btn'])) {
    $result= Calculation::cal($_POST);
}
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter Your String</th>
            <td><input type="text" name="str" size="50"/></td>
        </tr>
        <tr>
            <th>Total number of word</th>
            <td><input type="text"value="<?php echo $result['worldLength'] ?>" /></td>
        </tr>
        <tr>
            <th>Total number of char</th>
            <td><input type="text" value="<?php echo $result['stringLength'] ?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>

    </table>

</form>

