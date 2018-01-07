<?php
require_once "vendor/autoload.php";
use App\classes\Info;
$message="";
if(isset($_POST['btn'])){
    $message=Info::Addinfo($_POST);
}


?>
<a href="InfoAdd.php">ADD</a>
<a href="viewInfo.php">View</a>
<h1><?php echo $message; ?></h1>
<form action="" method="post">
    <table>
        <tr>
            <td>blog Title</td>
            <td><input type="text" name="blog_title"></td>
        </tr>
        <tr>
            <td>Author name</td>
            <td><input type="text" name="author_name"></td>
        </tr>
        <tr>
            <td>Blog Description</td>
            <td><input type="text" name="blog_description"></td>
        </tr>
        <tr>
            <td>Publication status</td>
            <td>
                <input type="radio" name="status" value="0">Unpublished
                <input type="radio" name="status" value="1">published
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
