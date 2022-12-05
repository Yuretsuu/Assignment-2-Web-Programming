<?php
include_once "../DS/User.php";
include_once "../DS/UserDAO.php";

$userDAO = new UserDAO();

$user = $userDAO->getUser( $userDAO->getLastUserID() );

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"type="text/css" href="inserthere.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Liz Quach">
    <meta name="email" content="quac0042@algonquinlive.com">
    <meta name="date" content="2022-12-02">
    <title>Webpage</title>
</head>
<body>
    <h2>Thank you for your order, <?php echo $user->Fname; ?></h2>

</body>
</html>