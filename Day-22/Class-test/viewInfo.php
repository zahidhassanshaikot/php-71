<?php
require_once "vendor/autoload.php";
use App\classes\Info;
$message="";
if (isset($_GET['delete'])){
    $id=$_GET['id'];
    $message=Info::deleteInfo($id);
}

$queryResult=Info::viewInfo();

?>
<a href="InfoAdd.php">ADD</a>
<a href="viewInfo.php">View</a>
<br/>
<h1><h1><?php echo $message; ?></h1></h1>

<table>
    <tr>
        <th>id</th>
        <th>blog</th>
        <th>author Name</th>
        <th>blog Description</th>
        <th>Publication Status</th>
        <th>Action</th>
    </tr>

    <?php while ($info=mysqli_fetch_assoc($queryResult)) {?>
        <tr>
            <td><?php echo $info['id']?></td>
            <td><?php echo $info['blog_title']?></td>
            <td><?php echo $info['author_name']?></td>
            <td><?php echo $info['blog_description']?></td>
            <td><?php echo $info['status']?></td>
            <td>
                <a href="infoEdit.php?id=<?php echo $info['id']?>">Edit</a>
                <a href="?delete=true&id=<?php echo $info['id']?>">Delete</a>
            </td>
        </tr>
    <?php }?>

</table>
