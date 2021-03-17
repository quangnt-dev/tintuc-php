<?php
function myConnect()
{
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'khoaphamtraining';

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_select_db($conn, $dbname);
  mysqli_query($conn, "SET NAMES 'utf8'");

  // echo "connected to database";
  return $conn;
}
?>

<?php ?>

