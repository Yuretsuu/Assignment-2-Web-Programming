<?php 
include_once "../DS/datasource.php";
include_once "../DS/User.php";

class UserDAO{

    public function getUser($id){
        $con = Datasource::getInst()->getConnection();
        $result = $con -> query("Select * from customer where id = $id");
        $array = array();

        if ($result->num_rows ==0)
            return null;

        $row = $result->fetch_assoc();
        
        $user = new User();
        $user ->id = $row['id'];
        $user->Fname= $row['firstname'];
        $user ->Lname = $row['lastname'];
        $user ->phone = $row['phonenumber'];
        $user ->email = $row['email'];
        return $user;
    }

    public function getLastUserID() {
        $con = Datasource::getInst()->getConnection();
        $result = $con->query("Select max(id) from customer");

        if ($result->num_rows ==0)
            return null;

        return $result->fetch_array()[0];
    }

    public function insertUser($user){
        $con = Datasource::getInst()->getConnection();
        echo var_dump($user);
        $result = $con -> query("Insert into customer (firstname, lastname, phonenumber, email) 
            VALUES ('$user->Fname', '$user->Lname', '$user->phone', '$user->email')");
        if ($result === FALSE)
            echo "Error: $con->error";
    }

}
?>