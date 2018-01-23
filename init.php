<?

$host = "localhost";
$db_user = "yogesh";
$db_password = "password";
$db_name = "fcm_db";

$con = mysqli_connect($host,"root","",$db_name);
if($con)
   echo "connection successful.....";
else {
   echo "connection un-successful.....";
}
?>
