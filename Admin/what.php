<!DOCTYPE html>
<?php
session_start();

include "../Users/functions/DatabaseConfig.php";
include "../Users/functions/clock.php";
include "../Users/functions/DatabaseConnection.php";
include "../Users/functions/DatabaseManipulation.php";
include ("functions/Admin.php");

$admin = new Admin();


var_dump($_SESSION['what_to_assign']);
var_dump($_SESSION['what']);
var_dump($_SESSION['what_what']);
var_dump($_SESSION['what_reward']);

if(isset($_POST['assign'])){

    $what_action = $_POST['what_action'];

    $what_element = $_SESSION['what'];
    $what_element_category = $_SESSION['what_reward'];
    $action_element_id = $_POST['what_to_award'];
    $type = $_SESSION['what_to_assign'];

    $assign = $admin->assign_number_of_comments($what_element,$what_element_category,$action_element_id,$what_action,$type);

}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>admin panel</h1>

<form action="what.php" method="post" >

    What <b> " <?php echo $_SESSION['what']?> " </b> of <b><?php echo $_SESSION['what_reward']; ?></b> Category ?
    <select name="what_to_award">
        <?php
            $get_what_to_award = $admin->get_category_based_on_type_and_id($_SESSION['what_to_assign'],$_SESSION['what_what']);

            while($row = mysqli_fetch_assoc($get_what_to_award)){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
            <?php }
        ?>
    </select><br />
    what action should be applied <input type="text" name="what_action" /><br />
    <input type="submit" value="Assign Reward" name="assign" />

</form>
</body>
</html>