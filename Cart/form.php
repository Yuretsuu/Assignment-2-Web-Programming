<?php session_start();
include_once "menuItems.php";
include_once "functions/cart.php";

$addItem = null;
$addItemSize = null;
$addItemPrice = null;

$search = null;

$filteredMenu = $menu;

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

if (isset($_REQUEST['search'])) {

    $search = strtolower($_REQUEST['search']);

    if ($search != "") {
        $filteredMenu= array();

        foreach ($menu as $itemName => $itemDetails){

            if(strpos(strtolower($itemName), $search) === false)
                continue;

            $filteredMenu[$itemName] = $itemDetails;
        }
    }
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

    <script>
        <?php
        echo "var menu = ".json_encode($menu);
        ?>
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../JS/searchMenu.js"></script>
</head>

<body>
    <!-- This order form will allow customers to add menu items to checkout and will include a "checkout" page to summarize the order 
    as well as ask for customer details to place the order (ie. name, address, billing, payment type, contact information) -->
        <div class="container">
            <div class="order-form">
                <input type="text" name="search" id="search">
                <input type="submit" name="submitSearch" id="submitSearch">
                <div class="menu-items">
                    <h3>Pho</h3>
                    <form method="post" id="menu-form">
                        <div id="menu-container">
                            <table class="pho" id="menu">
                                <!-- $menu is an array representing the menu. Please refer to menuItems.php
                                $item is a local variable used in the foreach loop to print out each menu item. -->
                                <?php foreach ($filteredMenu as $itemName => $itemDetails) {
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
                        </div>
                        <input type="Submit" value="Add to cart">
                    </form>
                </div>
                <h3>Cart</h3>
                <div class="clear-cart">
                    <form method="post" action="clearCart.php">
                        <input type="hidden" name="redirect" value="form.php">
                        <input type="submit" value="Clear">
                    </form>
                </div>
                <?php include "displayCart.php"; ?>
                <div class="check-out">
                <div class="clear-cart">
                    <form method="post" action="checkoutForm.php">
                        <input type="submit" value="Checkout">
                    </form>
                </div>
                </div>
            </div>
        </div>
</body>