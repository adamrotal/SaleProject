
<?php
require "include.php";
$_GET["id_active"] = $_POST["id_active"];
$user = authentification();

if(isset($_POST["submit"])){
    if($_POST["submit"]=="cancel"){
        Redirect($user['id'],'getProduk.php');    
    }
}

$target_dir = $DocumentRoot . "/gambar/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    
if(isset($_POST["submit"])) {

    
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

    
if (file_exists($target_file)) {
    
    $query = "SELECT MAX(id) as idProduk FROM produk";
    $result = selectDataFromDB($query);
    $result = $result->fetch_assoc();
    
    $gambar = $_FILES["photo"]["name"] + $result['idProduk'];
    
    $gambar = $gambar . "." . $imageFileType;
    $uploadOk = 1;
}else{
    $gambar = $_FILES["photo"]["name"];
}

if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}



if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    
    $target_file = $target_dir . basename($gambar);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        
        $idPenjual = $user['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        $namaPenjual = $user['username'];

        $query = "INSERT INTO produk (idPenjual,name,description,price,gambar,tanggalDiTambah,namaPenjual,deleted) VALUES('$idPenjual','$name','$description','$price','$gambar',CURDATE(),'$namaPenjual',false)";
        
        $idUpload = insertDataToDB($query);
        Redirect($user['id'],'getProduk.php');

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
