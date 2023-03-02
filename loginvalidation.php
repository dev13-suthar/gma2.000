<?php
 
//connection establish
$connection=mysqli_connect("localhost","root","");
//select database
$db =mysqli_select_db($connection,"project");
//when click button 

if(isset($_POST['login']))
{
  //create variable for input
  $ulogin=$_POST['username'];
  $pass_login=$_POST['log_password'];

  //fetch the data query
  $login=mysqli_query($connection,  "SELECT * FROM account WHERE email = '$ulogin' AND password = '$pass_login'");
  
  $row=mysqli_fetch_array($login);

  if($row['email'] == $ulogin && $row['password'] == $pass_login ) 
  {
    header('location:home.php');
  }

  else
  {
    echo '<script> 
		alert(" username and password invalid");
		window.location.href="login.html";
		
		</script>';
  }
 

}

mysqli_close($connection);

?>