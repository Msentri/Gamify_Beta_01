<!DOCTYPE html>
<?php
session_start();
include "functions/DatabaseConfig.php";
include "functions/clock.php";
include "functions/DatabaseConnection.php";
include "functions/DatabaseManipulation.php";

$databaseManipulation = new DatabaseManipulation();

$errorLogin = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $tableName = "ga_users";
    $columns = "*";
    $condition = "username='$username' AND password='$password'";

    $select = $databaseManipulation->select($tableName,$columns,$condition);

    $row = mysqli_fetch_assoc($select);

    $db_user_id = $row['userid'];
    $db_username = $row['username'];
    $db_email = $row['email'];
    $db_first_name = $row['firstname'];
    $db_last_name = $row['lastname'];
    $db_added_date = $row['added_date'];
    $db_status  = $row['status'];
    $db_password = $row['password'];



    if(($username == $db_username) && ($password == $db_password)){
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['username'] = "$db_username";
        $_SESSION['first_name'] = $db_first_name;
        $_SESSION['last_name'] = $db_last_name;
        echo '<script>window.location.assign("index.php")</script>';
    }else{
        $errorLogin = "1";
    }
}

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <!-- Autocomplete CSS -->

    <link rel="stylesheet" href="css/components/autocomplete.css">

    <!-- Autocomplete Javascript -->
    <script src="js/components/autocomplete.js"></script>
</head>
<body class="uk-height-1-1 uk-cover-background" style="background-image: url(images/bg2.jpg);">

<div class="uk-vertical-align uk-text-center uk-height-viewport">
    <div class="uk-vertical-align-middle" style="width: 250px;">

        <img class="uk-margin-bottom" width="140" height="120" src="images/siyandza-master-logo.png" alt="">

        <form class="uk-panel uk-panel-box uk-form" method="post" action="login.php">
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" name="username" type="text" placeholder="Username" required />
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" name="password" type="password" placeholder="Password" required />
            </div>
            <div class="uk-form-row">
                <input type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large" value="Login" name="login" />
            </div>

            <div class="uk-form-row">
                <?php
                if($errorLogin == "1"){
                    ?>
                    <div class="uk-alert uk-alert-danger">
                        <a href="" class="uk-alert-close uk-close"></a>
                        <p class="uk-text-small"><span class="uk-text-danger">Error :</span> please use valid login details.</p>
                    </div>
                <?php }
                ?>
            </div>
            <div class="uk-form-row uk-text-small">
                <label class="uk-float-left"><input type="checkbox"> Remember Me</label>
                <a class="uk-float-right uk-link uk-link-muted" href="index.php">Forgot Password?</a>
            </div>
        </form>

    </div>
</div>

</body>
</html>