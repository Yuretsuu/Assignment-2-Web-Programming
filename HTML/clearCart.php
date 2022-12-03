<?php session_start();
include_once "cart.php";

clearCart();
$redirect = $_REQUEST['redirect'];
header("Location:$redirect")
?>