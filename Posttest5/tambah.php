<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $telpon = $_POST['telpon'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
 
  $query = mysqli_query($db,"INSERT INTO homecleaning (nama,email,telpon,alamat) VALUES ('$nama','$telpon','$alamat','$email')");
  if($query){
    header("Location:index.php");
  } else {
    echo "Tambah data error";
  }
}
?>