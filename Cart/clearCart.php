<?php session_start();
include_once "functions/cart.php";

clearCart();
$redirect = $_REQUEST['redirect'];
header("Location:$redirect")
?>