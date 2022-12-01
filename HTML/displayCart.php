<?php 
session_start();
include_once "menuItems.php";

// if cart doesn't exist or if cart is empty,
if (!isset($_SESSION['cart'])
    || count($_SESSION['cart']) < 1)
    // early out
    die();

$cart = $_SESSION['cart'];
?>
    <h3>Cart Summary</h3>
    <table>
        <tr>
            <!-- Number of items -->
            <th></th>
            <th>Item</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
        <?php 
        //loop through $cart[] and print each instance 
        foreach ($cart as $cartItemNumber => $cartItem){
            $cartItemNumber++;
            $itemName = $cartItem['name'];
            $itemSize = $cartItem['size'];
            echo "<tr><td> $cartItemNumber </td>";
            echo "<td>$itemName</td>";
            echo "<td>$itemSize</td>";
            echo "<td>$ ".$menu[$itemName]['sizes'][$itemSize]."</td>";

            echo "</tr>";
        } 
            
        ?>
    </table>

    <form method="post" action="clearCart.php">
        <input type="submit" value="Clear">
    </form>