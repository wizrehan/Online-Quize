<html>
<head>
<title>User Signup</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from mst_user where login='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";

?>
<br><br><br><br><footer class="page-footer font-small stylish-color-dark pt-5">
  <div style="background-color: #66ffff;">
    <div class="container">
  <div class="footer-copyright text-center py-3">© 2020 Copyright by <br>
    <a href="https://web.facebook.com/ndcm">Md. Tanvir Ahmmed Rasel(19103095)</a><br>
    <a href="https://web.facebook.com/wizrehan">Md. Abu Raihan(18303059)</a><br>
    <a href="https://web.facebook.com/wizrehan">Sabiha Sultana(18203038)</a><br>
    <a href="https://web.facebook.com/wizrehan">Sahjahan Kabir Nayem(19103096)</a>
  </div>
</footer>
</body>
</html>

