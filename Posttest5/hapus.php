<?php
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM homecleaning WHERE id=$_GET[id]");
  if($query){
    header("Location:index1.php");
  } else {
    echo "Delete gagal";
  }
}
?>