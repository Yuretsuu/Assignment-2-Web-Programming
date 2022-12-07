<?php 
include_once "menuItems.php";
include_once "functions/cart.php";

$cart = getCart();

// if cart is empty,
if (getCartSize() < 1)
    // early out
    die();
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
        foreach ($cart as $cartItem){
            $itemName = $cartItem['name'];
            $itemSize = $cartItem['size'];
            $itemQuantity = $cartItem['quantity'];
            $itemPrice = $menu[$itemName]['sizes'][$itemSize];
            echo "<tr><td> $itemQuantity x </td>";
            echo "<td>$itemName</td>";
            echo "<td>$itemSize</td>";
            echo "<td>$ ".$itemPrice."</td>";
            echo "</tr>";
        } 
            echo"<tr><td>Subtotal</td>";  
            echo "<td>".calculateCartSubtotal()."</td>";
            
            
            echo "</tr>"
        ?>
    </table>