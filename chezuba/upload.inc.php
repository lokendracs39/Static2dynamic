<?php

  if(isset($_POST['submit'])) {
    include_once  'db.inc.php';
    $que = mysqli_real_escape_string($conn,$_POST['question']);
    $ans = mysqli_real_escape_string($conn,$_POST['answer']);

    $sql = "INSERT INTO dynamic (question, answer) VALUES ('$que', '$ans')";
    mysqli_query($conn,$sql);
    header("Location: ./index.php?upload= success");
  }
  else {
    header("Location: ./index.php?upload= error");
  }
 ?>
