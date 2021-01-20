<?php
  $conn = mysqli_connect("localhost", "root", "root", "loginsystem");
  if(mysqli_connect_errno())
  {
    echo "falied to connect to mysql" . mysqli_connect_errno();
  }

 ?>
