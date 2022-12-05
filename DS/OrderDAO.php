<?php 
include_once "../DS/datasource.php";
include_once "../DS/Order.php";

class OrderDAO{

    public function getOrder($id){
        $con = Datasource::getInst()->getConnection();
        $result = $con -> query("Select * from invoiceOrder");
        $array = array();

        if ($result->num_rows ==0)
            return null;

        while ($row = $result->fetch_assoc()){
            $order = new Order();

            $order ->id = $row['id'];
            $order->customerID= $row['customerID'];
            $order ->subtotal = $row['subtotal'];
            $order ->date = $row['orderdate'];

            $array[]= $order;
        }
        return $array;
    } 

    public function insertOrder($order){
        $con = Datasource::getInst()->getConnection();
        $result = $con -> query("Insert into invoiceOrder (customerID, subtotal, orderdate) 
            VALUES ($order->customerID, '$order->subtotal', '$order->date')");
        if ($result === FALSE)
            echo "Error: $con->error";
    }

}
?>