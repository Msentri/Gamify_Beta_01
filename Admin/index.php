<!DOCTYPE html>
<?php
session_start();

include "../Users/functions/DatabaseConfig.php";
include "../Users/functions/clock.php";
include "../Users/functions/DatabaseConnection.php";
include "../Users/functions/DatabaseManipulation.php";
include ("functions/Admin.php");


    if(isset($_POST['check'])){
            $rewards = $_POST['rewards'];
        if($rewards == 1){
            unset($_SESSION['what']);
            $_SESSION['what'] = "Badge";
        }elseif($rewards == 2){
            unset($_SESSION['what']);
            $_SESSION['what'] = "Reward";
        }elseif($rewards == 3){
            sunset($_SESSION['what']);
            $_SESSION['what'] = "Level";
        }elseif($rewards == 4){
            unset($_SESSION['what']);
            $_SESSION['what'] = "Point";
        }elseif($rewards == 5){
            unset($_SESSION['what']);
            $_SESSION['what'] = "Credit";
        }elseif($rewards == 6){
            unset($_SESSION['what']);
            $_SESSION['what'] = "Package";
        }elseif($rewards == 7){
            unset($_SESSION['what']);
            $_SESSION['what'] = "Event";
        }
            $_SESSION['what_to_assign'] = $rewards;

        //echo $_SESSION['what_to_assign'];
            echo '<script>window.location.assign("category.php")</script>';

    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>admin panel</h1>



    <form action="index.php" method="post" >



        What do you want to Assign ?
        <select name="rewards">

            <?php

            $admin = new Admin();

            $getAssign = $admin->get_what_to_assign();
            while($row = mysqli_fetch_assoc($getAssign)){
                echo $row['title']."<br />";
                $catID = $row['type'];

                if($catID == 1){
                    ?>
                    <option value="<?php echo $catID; ?>">Badges</option>
                <?php
                }
                elseif($catID == 2){
                    ?>
                    <option value="<?php echo $catID; ?>">Rewards</option>
                <?php
                }
                elseif($catID == 3){
                    ?>
                    <option value="<?php echo $catID; ?>">Levels</option>
                <?php
                }
                elseif($catID == 4){
                    ?>
                    <option value="<?php echo $catID; ?>">Points</option>
                <?php
                }
                elseif($catID == 5){
                    ?>
                    <option value="<?php echo $catID; ?>">Credits</option>
                <?php
                }
                elseif($catID == 6){
                    ?>
                    <option value="<?php echo $catID; ?>">Packages</option>
                <?php
                }
                elseif($catID == 7){
                    ?>
                    <option value="<?php echo $catID; ?>">Event</option>
                <?php
                }
            }

            ?>
        </select>

        <input type="submit" value="check" name="check" />

    </form>
</body>
</html>