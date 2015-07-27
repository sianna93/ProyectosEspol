<?php
  $con=mysqli_connect("localhost","root","","daw");
  //Check conection
  //echo"aqui";
  if(mysqli_connect_error())
  {
      echo"Failed to connect to MySql: " .mysqli_connect_error();
  }else{echo"conectada";}  
  $sql="INSERT INTO Persona (firstname, lastname, age)
  VALUES  ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

  if(!mysqli_query($con,$sql)){
      die('Error: ' .mysqli_error($con));
  }
  echo "1 record added";
  mysqli_close($con);
?>
