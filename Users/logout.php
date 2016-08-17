<?php
/**
 * Created by PhpStorm.
 * User: sandilemazibuko
 * Date: 2016/08/10
 * Time: 12:32 PM
 */
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo '<script>window.location.assign("login.php")</script>';