<?php session_start();
include_once "menuItems.php";
include_once "cart.php";

$addItem = null;
$addItemSize = null;
$addItemPrice = null;

// body executes when user has added a new item to cart
if (isset($_REQUEST['item'])) {
//$id = $item+size. Please refer to line 46(subject to change)
    $id = $_REQUEST['item'];
    $arr = explode('+', $id);
    $addItem = trim($arr[0]);
    $addItemSize = trim($arr[1]);
    $addItemPrice = $menu[$addItem]["sizes"][$addItemSize];

    // creates an array to store cart items(stores name and size). $_SESSION will call the 'cartitem' and add it to the _$SESSION array.
    // $cartItem = ['name' => $addItem, 'size' => $addItemSize];
    // $_SESSION['cart'][] = $cartItem;
    addCartItem($addItem, $addItemSize);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"type="text/css" href="inserthere.css">
    <script src = "" defer ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Liz Quach">
    <meta name="email" content="quac0042@algonquinlive.com">
    <meta name="date" content="2022-11-25">
    <title>Take-out Form</title>
</head>

<body>
    <!-- This order form will allow customers to add menu items to checkout and will include a "checkout" page to summarize the order 
    as well as ask for customer details to place the order (ie. name, address, billing, payment type, contact information) -->
        <div class="container">
            <div class="order-form">
                <div class="menu-items">
                    <h3>Pho</h3>
                    <form method="post">
                        <table class="pho">
                            <!-- $menu is an array representing the menu. Please refer to menuItems.php
                            $item is a local variable used in the foreach loop to print out each menu item. -->
                            <?php foreach ($menu as $itemName => $itemDetails) {
                                echo "<tr>";
                                //'name' and 'desc' belongs to $menu array in menuItems.php
                                echo "<td><h3>".$itemName."</h3><p>" .$itemDetails['desc']."</p></td>";
                                
                                // add JS function to update price when size is changed
                                echo "<td>";
                                foreach ($itemDetails["sizes"] as $size => $price) {

                                    $id = menuItemId($itemName, $size);

                                    echo "<input type='radio' name='item' id='$id' value='$id'>";
                                    echo "<label for='$id'> $size ($price) </label> <br>";
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                        <input type="Submit" value="Add to cart">
                    </form>
                        
                    <h3>Cart</h3>
                    <form method="post" action="clearCart.php">
                        <input type="hidden" name="redirect" value="form.php">
                        <input type="submit" value="Clear">
                    </form>
                    <?php include "displayCart.php"; ?>

                </div>
                <div class="clear-cart"></div>
                <div class="check-out"></div>
            </div>
        </div>
</body>