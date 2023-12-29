<?php 
error_reporting(0);
	$id = $_GET['id_kamar'];

	$conn = mysqli_connect("localhost", "root", "", "uk_hotel");
	$sql = "SELECT * FROM kamar WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	mysqli_close($conn);
?>
<style>
   .preview img {
    width: 40%;
    display: none;
    margin-top: 30px;
}
</style>
<form method="POST" action="./updatekamar.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <label>Tipe</label><br>
    <input class="input-kamar" type="text" name="tipe" id="" required
                        style="padding-left: 2% !important; padding-right: 2%;"" value="<?php echo $row['tipe']; ?>"> <br>

  <label>Jumlah Kamar</label><br>
   <input class="input-kamar" type="number" name="jumlah_kamar" id="" required
                        style="padding-left: 2% !important; padding-right: 2%;""  value="<?php echo $row['jumlah']; ?>"> <br>

  <label>Current Image</label><br>
    <img src="./<?php echo $row['image']; ?>" width="100"><br>
  

  <label>Upload Gambar</label><br>
  <input type="file" name="image" id="file-upload" accept="image/*" onchange="previewImage(event);"
                        style="padding-left: 2% !important; padding-right: 2%;  margin: 10px;"> <br>

  <label>Preview</label><br>
  <div class="preview">
        <img id="preview-selected-image" />
</div>


  <input type="submit" name="submit" value="Update">
</form>


 <script type="text/javascript">
      const previewImage = (event) => {
    const imageFiles = event.target.files;
    const imageFilesLength = imageFiles.length;
    if (imageFilesLength > 0) {
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        const imagePreviewElement = document.querySelector("#preview-selected-image");
        imagePreviewElement.src = imageSrc;
        imagePreviewElement.style.display = "block";
    }
};
    </script>
