<?php
/**
 * Date: 12/26/2017
 * Time: 9:19 AM
 */
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//
//$firsName= $_POST['first_name'];
//$lastName= $_POST['last_name'];
//$fullName= $firsName.' '.$lastName;
//echo $fullName;

$result=' ';
if (isset($_POST['btn'])==1){
//    $firsName= $_POST['first_name'];
//    $lastName= $_POST['last_name'];
//    $fullName= $firsName.' '.$lastName;
//    echo $fullName;

require_once 'fullName.php';
$fullName=new fullName();
$result= $fullName->makeFullName($_POST['first_name'],$_POST['last_name']);

}
?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name" /></td>
        </tr>

        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name"/></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="Full_name"value="<?php echo $result?>"/></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>

    </table>
</form>

