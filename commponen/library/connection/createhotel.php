
<?php
if(isset($_POST["submit"])){
    $fasilitas = $_POST["fasilitas"];
    $keterangan = $_POST["keterangan"];

    $target_dir = "./img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
    else{
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $conn = mysqli_connect("localhost", "root", "", "uk_hotel");
            $sql = "INSERT INTO fasilitas_hotel (`id`, `nama`, `keterangan`, `image`) VALUES (0, '$fasilitas',  '$keterangan','$target_file')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            header("Location: ../../fasilitas_hotel.php?pages=hotel");
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

}
 ?>
