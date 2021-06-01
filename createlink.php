<?php
require('connection.php');
if(isset($_POST['createlink'])){

	if(!isset($_SESSION['user_id'])){
		header('location:makelink.php');
		die();
	}

	$link=$_POST['userlink'];
	if(empty($link)) {
		echo "<script>alert('Link not found')</script>";
	}
	else{
		
		$query2="SELECT * FROM orders ORDER BY order_id DESC LIMIT 1";
    	$result2=mysqli_query($con,$query2);
    	$last_row=mysqli_fetch_assoc($result2);

    	$y=date('Y');
		$m=date('m');
		$d=date('d');
		$str = "OID";
		$last_order_id=$last_row['order_id']+1;
		$share_id=$str.$y.$m.$d.$last_order_id;
		$user_id=$_SESSION['user_id'];

		if(stripos("$link","flipkart")>=1){
		$flipkart="&affid=sachineve&affExtParam1=".$share_id."&affExtParam2=".$user_id;
		$link=$link.$flipkart;
		$whatsapplink=urlencode($link);

		$sql="INSERT INTO orders(share_id,user_id,link) VALUES(?,?,?)";
	  	$stmt=$con->prepare($sql);
	  	$stmt->bind_param("sis",$share_id,$user_id,$link);
	  	$stmt->execute();
	  	echo "<script>document.getElementById('myinput').value='$link';
	  	document.getElementById('myshare').href='https://api.whatsapp.com/send?phone=&text=$whatsapplink';
	  	$('#makelinkmodal').modal('show')
	  	</script>";
		}
		elseif(stripos("$link","amazon")>=1){
		$amazon="&tag=sachin05a9-21";
		$link=$link.$amazon;
		$whatsapplink=urlencode($link);

		$sql="INSERT INTO orders(share_id,user_id,link) VALUES(?,?,?)";
	  	$stmt=$con->prepare($sql);
	  	$stmt->bind_param("sis",$share_id,$user_id,$link);
	  	$stmt->execute();
	  	echo "<script>document.getElementById('myinput').value='$link';
	  	document.getElementById('myshare').href='https://api.whatsapp.com/send?phone=&text=$whatsapplink';
	  	$('#makelinkmodal').modal('show')
	  	</script>";
		}
		else{
			echo"<script>alert('Link is not valid!')</script>";
		}
	}
}

?>