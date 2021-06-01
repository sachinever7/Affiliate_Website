<?php $con = mysqli_connect('localhost','root');
if($con)
{
}
else
{
	echo"connection not established";
}
mysqli_select_db($con,'affiliate_website');
?>