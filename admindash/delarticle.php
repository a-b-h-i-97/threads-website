<?php

if(isset($_GET['id']))
{
  include '../common/con.php';  
  $id=$_GET['id'];
 // getting query from db
$sql = "DELETE FROM `Articles` WHERE id='$id'";
  
$result = $conn->query($sql);
  
 $conn->close();
 
  
 header('Location:manage.php');
  
  
}

?>