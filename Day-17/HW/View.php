<?php
/**
 * Created by PhpStorm.
 * User: DIU
 * Date: 12/26/2017
 * Time: 8:38 PM
 */

$result=' ';
//$result=array();
if (isset($_POST['btn'])){

    require_once 'Calculation.php';
    $calculation=new Calculation();
    $result= $calculation->makeResult($_POST['first_num'],$_POST['second_num']);

}

?>

<?php

$result2=' ';
//$result2=array();
if (isset($_POST['btn2'])){

    require_once 'Calculation.php';
    $calculation=new Calculation();
    $result2= $calculation->makeResult2($_POST['first_num2'],$_POST['second_num2'],$_POST['option']);

}

?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_num" /></td>
        </tr>

        <tr>
            <th>second Name</th>
            <td><input type="text" name="second_num"/></td>
        </tr>

        <tr>
            <th>Result</th>
            <td><input type="text" name="result"value="<?php echo $result?>"/></td>
        <!-- <td><input type="text" name="result"value="--><?php //foreach ($result as $x){echo $x.' ';} ?><!--"/></td>-->
        </tr>

        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="Submit"/>
            </td>
        </tr>
        </tr>

    </table>
</form>
<br/>
<hr/>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_num2" /></td>
        </tr>

        <tr>
            <th>second Name</th>
            <td><input type="text" name="second_num2"/></td>
        </tr>
        <tr>
            <th>Select Option</th>
            <td>
                <input type="radio" name="option" value=1 checked> Odd<br>
                <input type="radio" name="option" value=0> Even<br>
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" name="result2"value="<?php echo $result2?>"/></td>
            <!-- <td><input type="text" name="result"value="--><?php //foreach ($result as $x){echo $x.' ';} ?><!--"/></td>-->
        </tr>

        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn2" value="Submit"/>
            </td>
        </tr>
        </tr>

    </table>
</form>


