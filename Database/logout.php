<!DOCTYPE html>

<?php
session_start();

unset($_SESSION['loggedin']);
$_SESSION = array();
session_destroy();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header("Location: http://localhost/10DGS-Fake-Deets-Project/Home/index.php");
}
?> 