<?php
require_once "vendor/autoload.php";
use App\classes\Info;
$message="";
$id=$_GET['id'];
$queryResult=Info::getInfo($id);
$info=mysqli_fetch_assoc($queryResult);

if(isset($_POST['btn'])){
    Info::editInfo($_POST);
}



?>
<a href="InfoAdd.php">ADD</a>
<a href="viewInfo.php">View</a>
<!--<h1>--><?php //echo $message; ?><!--</h1>-->
<form action="" method="post">
    <table>
        <tr>
            <td>blog Title</td>
            <td><input type="text" name="blog_title" value="<?php echo $info['blog_title']?>"></td>
            <td><input type="hidden" name="id" value="<?php echo $info['id']?>"></td>
        </tr>
        <tr>
            <td>Author name</td>
            <td><input type="text" name="author_name" value="<?php echo $info['author_name']?>"></td>
        </tr>
        <tr>
            <td>Blog Description</td>
            <td><input type="text" name="blog_description" value="<?php echo $info['blog_description']?>"></td>
        </tr>
        <tr>
            <td>Publication status</td>
            <td>
                <input type="radio" name="status" value="0"<?php if($info['status']==0) echo 'checked';?>>Unpublished
                <input type="radio" name="status" value="1"<?php if($info['status']==1) echo 'checked';?>>published
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
