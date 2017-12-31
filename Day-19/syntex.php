<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/31/2017
 * Time: 9:24 AM
 */
$result=[
    'stringLength'=>'',
    'worldLength'=>'',
];
if (isset($_POST['btn'])) {
    require_once 'Calculation.php';
   $calculation=new Calculation();
    $result= $calculation->cal($_POST);
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

