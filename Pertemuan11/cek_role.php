<?php
session_start();

// print_r($_SESSION['role_id']);
if ($_SESSION['role_id'] == 2) {
    header("Location: ../index.php");
}
