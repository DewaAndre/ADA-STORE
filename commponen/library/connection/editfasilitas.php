<?php 
error_reporting(0);
$con=mysqli_connect("localhost","root","","uk_hotel");
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 
 $result2 = mysqli_query($con,"SELECT * FROM kamar");
 
 mysqli_close($con);
?>

<?php 
error_reporting(0);
  $id = $_GET['id'];

  $conn = mysqli_connect("localhost", "root", "", "uk_hotel");
  $sql = "SELECT * FROM fasilitas_kamar WHERE kamar_id=$id";
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
<form method="POST" action="./updateFasilitas.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <label>Nomor Kamar</label><br>
  
  <input type="text" name="kamar_id"  value="<?php echo $row['kamar_id']; ?>"><br>

   <select name="tipe" id="">
      <option value="" disabled selected>Pilih ID Kelas</option>
      <?php while($rowKamar = mysqli_fetch_array($result2)) {?>
          <option value="<?php echo $rowKamar['id']; ?>"><?php echo $rowKamar['id'] . ' - ' . $rowKamar['tipe']; ?></option>
          <?php } ?>
      </select>       <br> <br>

  <label>Nama Fasilitas</label><br>
   <input class="input-kamar" type="text" name="fasilitas" id="" required
                        style="padding-left: 2% !important; padding-right: 2%;""  value="<?php echo $row['nama']; ?>"> <br>

  <input type="submit" name="submit" value="Update">
</form>