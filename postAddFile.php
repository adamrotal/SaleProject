
<?php
require "include.php";
$_GET["id_active"] = $_POST["id_active"];
$user = autentificatin();

$target_dir = "gambar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    $query = "SELECT MAX(id) as id FROM produk";
    $result = selectDataFromDB(query);
    $result = $result->fetch_assoc();
    $name = $_FILES["fileToUpload"]["name"] + "("+$result['id']+")";
    $uploadOk = 1;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $idPenjual = $user['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $gambar = $_FILES["fileToUpload"]["name"];
        $namaPenjual = $user['username'];

        $query = "INSERT INTO produk (idPenjual,name,description,price,gambar,tanggalDiTambah,namaPenjual) VALUES($idPenjual,$name,$description,$price,$gambar,CURDATE(),$namaPenjual)";
        $idUpload = insertDataToDB($query);

        Redirect($user['id'],getYourProduct.php);

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>