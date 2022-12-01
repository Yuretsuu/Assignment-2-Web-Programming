<?php session_start();

$_SESSION['cart'] = null;

header("Location:form.php");
?>