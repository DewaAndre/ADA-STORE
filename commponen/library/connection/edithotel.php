<?php 
error_reporting(0);
	$id = $_GET['id_hotel'];

	$conn = mysqli_connect("localhost", "root", "", "uk_hotel");
	$sql = "SELECT * FROM fasilitas_hotel WHERE id=$id";
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
<form method="POST" action="./updateHotel.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <label>Nama Fasilitas</label><br>
    <input class="input-kamar" type="text" name="fasilitas" id="" required
                        style="padding-left: 2% !important; padding-right: 2%;"" value="<?php echo $row['nama']; ?>"> <br>

  <label>Keterangan</label><br>
   <input class="input-kamar" type="text" name="keterangan" id="" required
                        style="padding-left: 2% !important; padding-right: 2%;""  value="<?php echo $row['keterangan']; ?>"> <br>

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
