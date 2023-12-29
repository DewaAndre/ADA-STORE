
<?php
if(isset($_POST["submit"])){
    $tipe = $_POST["tipe"];
    $jumlah_kamar = $_POST["jumlah_kamar"];

    $target_dir = "./img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
    else{
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $conn = mysqli_connect("localhost", "root", "", "uk_hotel");
            $sql = "INSERT INTO kamar (`id`, `tipe`, `jumlah`, `image`) VALUES (0, '$tipe',  '$jumlah_kamar','$target_file')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            header("Location: ../../kamar.php?pages=kamar");
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

}
 ?>
