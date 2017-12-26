
<?php
/**
 * Date: 12/26/2017
 * Time: 10:25 AM
 */


$result=' ';
$first_num=' ';
if (isset($_POST['btn'])){

    require_once 'calculation.php';
    $fullName=new Calculation();
    $result= $fullName->myCalculation($_POST);

}

?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_num" value="<?php echo $_POST['first_num']; ?>" /></td>
        </tr>

        <tr>
            <th>second Name</th>
            <td><input type="text" name="second_num"/></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" name="result"value="<?php echo $result?>"/></td>
        </tr>

        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+"/>
                <input type="submit" name="btn" value="-"/>
                <input type="submit" name="btn" value="*"/>
                <input type="submit" name="btn" value="/"/>
                <input type="submit" name="btn" value="%"/>
            </td>
        </tr>
        </tr>

    </table>
</form>


