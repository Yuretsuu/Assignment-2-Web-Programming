<?php
include_once "menuItems.php";

if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = array();

function &getCart() {

    return $_SESSION['cart'];
}

function addCartItem($itemName, $itemSize) {

    // $_SESSION['cart'][] = ['name' => $itemName, 'size' => $itemSize];
    

    $id = menuItemId($itemName, $itemSize);


    if (isset( $_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']++;
        return;
    }
    
    $_SESSION['cart'][$id]= ['name' => $itemName, 'size' => $itemSize, 'quantity' => 1];
}

function removeCartItem($itemName, $itemSize) {

    
}

function clearCart() {

    $_SESSION['cart'] = array();
}

function calculateCartSubtotal() {
    global $menu;
    $total = 0;

    foreach  ($_SESSION['cart'] as $cartItem){
        $itemName =$cartItem['name'];
        $itemSize = $cartItem['size'];
        $cartItemQuantity = $cartItem['quantity']; 
        $cartItemPrice = $menu[$itemName]['sizes'][$itemSize];

        $total += $cartItemQuantity * $cartItemPrice;
    }
    return $total;
}

function checkoutCart() {


}

function isCartEmpty() {

    return getCartSize() == 0;
}

function getCartSize() {

    return count(getCart());
}
?>