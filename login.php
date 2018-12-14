<?php

    $adminName = "thadmin";
    $adminPassW = "asenzadmin";

    session_start();
    if($_POST['username'] === $adminName && $_POST['password'] === $adminPassW) {
        header('Location: admin.php');
    } else {
        header('Location: contact.php');
    }
?>