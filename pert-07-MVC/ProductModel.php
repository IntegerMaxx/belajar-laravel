<?php

class ProductModel{
    private string $name;
    private int $price;
    private string $description;

    public function __construct($name, $price, $description){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName(){
        return $this->name;
    }


    public function getPrice(){
        return $this->price;
    }

    public function getDescription(){
        return $this->description;
    }

    public static function sayHelloBig(){
        echo "<h1 class='ini-test'>HELLO WORLD</h1>";
    }

}


// $productList = [
//     new ProductModel( 'Realme X', 2000, 'Produk anti lemot'),
//     new ProductModel( 'Redmi 10', 1000, 'Harga terjangkau'),
// ];


$listName = ['Realme X', 'Redmi 10','ini hp test'];
$listPrice =[2000, 1000, 900];
$listDescription = ['Produk anti lemot', 'Harga terjangkau', 'Paling berbahaya'];

$productList = [];

for ($i = 0; $i < count($listName); $i++ ){
    $productList[] = new ProductModel($listName[$i], $listPrice[$i], $listDescription[$i]);
}






?>