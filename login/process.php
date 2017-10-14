<?php 
//get values passe from form in login.php file
$username=$_POST['user'];
$password=$_POST['pass'];
// to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$username = mysql_real_escape_string($password);

// connect to the server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("login");
// query the database for user
$result = mysql_query("select * from users where username = '$username' and password = '$password'")
 or die("failed to query database" .mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
echo "login success!!! welcome ",$row['username'];
} else{
echo "login success!!! welcome!";
}
?>


