<?php

session_start();

if (isset($_SESSION['email'])) {
    # code...212
session_destroy();

header("Location: login/index.php");

}



