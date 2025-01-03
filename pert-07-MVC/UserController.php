<?php
require_once 'UserModel.php';


class UserController{

    public function userCheck(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $password = $_POST['password'];

            if(UserModel::loginCheck($name, $password)){
                header("Location: ProductView.php");
                exit();
            } else{
                echo '<h1>Mohon maaf, Anda tidak bisa masuk</h1>';
            }
        }
    }       
    


}

?>