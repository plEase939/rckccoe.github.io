<?php
session_start();
include 'config.php';
if(isset($_POST['phone'])) {
  $email = $_POST['phone'];
  $password = $_POST['otp'];
  $sql = "SELECT * FROM users WHERE username = '$email'";
  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($password == $row['password']) {
      $_SESSION['uid'] = $row['id'];
      $myfile = fopen("userlogs.txt", "a") or die("Unable to open file");
      $firstname = $_POST['phone']." Successfully Logged in \n";
      fwrite($myfile, $firstname);
      fclose($myfile);
      $contents = file_get_contents('nttlive/video.html');
    echo $contents;




    } else {
      echo "<script type='text/javascript'>alert('Please Try Again');</script>";
      $login = file_get_contents('index.html');
      echo $login;
    }
  } else {
    echo "<script type='text/javascript'>alert('Please Try Again');</script>";
    $login = file_get_contents('index.html');
    echo $login;
  }
}
?>


<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>