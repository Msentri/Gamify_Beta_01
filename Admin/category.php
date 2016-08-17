<!DOCTYPE html>
<?php
session_start();

include "../Users/functions/DatabaseConfig.php";
include "../Users/functions/clock.php";
include "../Users/functions/DatabaseConnection.php";
include "../Users/functions/DatabaseManipulation.php";
include ("functions/Admin.php");

$admin = new Admin();

if(isset($_POST['submit'])){
    $get_category_reward = $_POST['category'];

    $get_category_by_name = $admin->get_category_two($get_category_reward);
    $results = mysqli_fetch_assoc($get_category_by_name);
    $_SESSION['what_reward'] = $results['title'];
    $_SESSION['what_what'] = $get_category_reward;


    echo '<script>window.location.assign("what.php")</script>';
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>admin panel</h1>



<form action="category.php" method="post" >

    What <b>" <?php echo $_SESSION['what']?> "</b> Category ?
    <select name="category">

        <?php

        $get_category = $admin->get_category($_SESSION['what_to_assign']);

        while($row = mysqli_fetch_assoc($get_category)){
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
        <?php }
        ?>

    </select>
    <input type="submit" name="submit" value="Continue" / >

</form>
</body>
</html>