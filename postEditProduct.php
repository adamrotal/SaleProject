<?php
    require "include.php";
    $_GET["id_active"] = $_POST["id_active"];
    $user = authentification();

    if($_POST["submit"] == "UPDATE"){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $idProduk = $_POST['id'];

        $query = "UPDATE produk SET name = '$name', description = '$description', price = '$price' WHERE id = '$idProduk'";
        $result = selectDataFromDB($query);
    }
    
    Redirect($user['id'],'getProduk.php');
    


?>
