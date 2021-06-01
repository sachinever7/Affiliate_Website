<?php include '../connection.php';
session_start();

  $update=false;
  $product_cat_id="";
  $product_name="";
  $retailer_name="";
  $product_selling_price="";
  $product_cost_price="";
  $product_profit_price="";
  $product_short_desc="";
  $product_long_desc="";
  $brand_name="";
  $similar_product_1="";
  $similar_product_2="";
  $similar_product_3="";
  $similar_product_4="";
  $product_features="";
  $product_link="";

  $product_main_image="";
  $product_image1="";
  $product_image2="";
  $product_image3="";

if (isset($_POST['add'])){
	$product_cat_id=$_POST['product_cat_id'];
	$product_name=$_POST['product_name'];
	$retailer_name=$_POST['retailer_name'];
	$product_selling_price=$_POST['product_selling_price'];
	$product_cost_price=$_POST['product_cost_price'];
	$product_profit_price=$_POST['product_profit_price'];
	$product_short_desc=$_POST['product_short_desc'];
	$product_long_desc=$_POST['product_long_desc'];
	$brand_name=$_POST['brand_name'];
	$similar_product_1=$_POST['similar_product_1'];
	$similar_product_2=$_POST['similar_product_2'];
	$similar_product_3=$_POST['similar_product_3'];
	$similar_product_4=$_POST['similar_product_4'];
	$product_features=$_POST['product_features'];
	$product_link=$_POST['product_link'];

	$product_main_image=$_FILES['product_main_image']['name'];
	$upload1='uploads/products/'.$product_main_image;
	$product_image1=$_FILES['product_image1']['name'];
	$upload2='uploads/products/'.$product_image1;
	$product_image2=$_FILES['product_image2']['name'];
	$upload3='uploads/products/'.$product_image2;
	$product_image3=$_FILES['product_image3']['name'];
	$upload4='uploads/products/'.$product_image3;

	$query="INSERT INTO products(product_cat_id,product_name,product_short_desc,product_long_desc,product_main_image,product_image1,product_image2,product_image3,product_cost_price,product_selling_price,product_profit_price,retailer_name,product_features,product_link,similar_product_1,similar_product_2,similar_product_3,similar_product_4,brand_name)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  	$stmt=$con->prepare($query);
  	$stmt->bind_param("ssssssssssssssssss",$product_cat_id,$product_name,$product_short_desc,$product_long_desc,$upload1,$upload2,$upload3,$upload4,$product_cost_price,$product_selling_price,$product_profit_price,$retailer_name,$product_features,$product_link,$similar_product_1,$similar_product_2,$similar_product_3,$similar_product_4,$brand_name);
  	$stmt->execute();
  	move_uploaded_file($_FILES['product_main_image']['tmp_name'], $upload1);
  	move_uploaded_file($_FILES['product_image1']['tmp_name'], $upload2);
  	move_uploaded_file($_FILES['product_image2']['tmp_name'], $upload3);
    move_uploaded_file($_FILES['product_image3']['tmp_name'], $upload4);
	
	header('location:editproduct.php');
	$_SESSION ['response'] ="Successfully inserted to the database!";
	$_SESSION['res_type']="success";
}
if(isset($_GET['delete'])){

	$query2="SELECT product_main_image,product_image1,product_image2,product_image3 FROM products WHERE product_id=?";
		$product_id=$_GET['delete'];
		$stmt2=$con->prepare($query2);
		$stmt2->bind_param("i",$product_id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();
		$imagepath1=$row['product_main_image'];
		unlink($imagepath1);
		$imagepath2=$row['product_image1'];
		unlink($imagepath2);
		$imagepath3=$row['product_image2'];
		unlink($imagepath3);
		$imagepath4=$row['product_image3'];
		unlink($imagepath4);
		
		$query1="DELETE FROM products WHERE product_id=?";
		$stmt1=$con->prepare($query1);
		$stmt1->bind_param("i",$product_id);
		$stmt1->execute();
		

		
		$_SESSION ['response'] ="Successfully deleted from the database!";
		$_SESSION['res_type']="danger";
		header('location:index.php');
	}

	if (isset($_POST['update'])){
		$product_id=$_POST['product_id'];

	$product_cat_id=$_POST['product_cat_id'];
	$product_name=$_POST['product_name'];
	$retailer_name=$_POST['retailer_name'];
	$product_selling_price=$_POST['product_selling_price'];
	$product_cost_price=$_POST['product_cost_price'];
	$product_profit_price=$_POST['product_profit_price'];
	$product_short_desc=$_POST['product_short_desc'];
	$product_long_desc=$_POST['product_long_desc'];
	$brand_name=$_POST['brand_name'];
	$similar_product_1=$_POST['similar_product_1'];
	$similar_product_2=$_POST['similar_product_2'];
	$similar_product_3=$_POST['similar_product_3'];
	$similar_product_4=$_POST['similar_product_4'];
	$product_features=$_POST['product_features'];
	$product_link=$_POST['product_link'];

	$old_product_main_image=$_POST['old_product_main_image'];
	$old_product_image1=$_POST['old_product_image1'];
	$old_product_image2=$_POST['old_product_image2'];
	$old_product_image3=$_POST['old_product_image3'];

	if(isset($_FILES['product_main_image']['name'])&&($_FILES['product_main_image']['name']!="")){
		$new_product_main_image="uploads/products/".$_FILES['product_main_image']['name'];
		unlink($old_product_main_image);
		move_uploaded_file($_FILES['product_main_image']['tmp_name'], $new_product_main_image);
	}
	else{
		$new_product_main_image=$old_product_main_image;
	}
	if(isset($_FILES['product_image1']['name'])&&($_FILES['product_image1']['name']!="")){
		$new_product_image1="uploads/products/".$_FILES['product_image1']['name'];
		unlink($old_product_image1);
		move_uploaded_file($_FILES['product_image1']['tmp_name'], $new_product_image1);
	}
	else{
		$new_product_image1=$old_product_image1;
	}
	if(isset($_FILES['product_image2']['name'])&&($_FILES['product_image2']['name']!="")){
		$new_product_image2="uploads/products/".$_FILES['product_image2']['name'];
		unlink($old_product_image2);
		move_uploaded_file($_FILES['product_image2']['tmp_name'], $new_product_image2);
	}
	else{
		$new_product_image2=$old_product_image2;
	}
	if(isset($_FILES['product_image3']['name'])&&($_FILES['product_image3']['name']!="")){
		$new_product_image3="uploads/products/".$_FILES['product_image3']['name'];
		unlink($old_product_image3);
		move_uploaded_file($_FILES['product_image3']['tmp_name'], $new_product_image3);
	}
	else{
		$new_product_image3=$old_product_image3;
	}

	$query="UPDATE products SET product_cat_id=?,product_name=?,product_short_desc=?,product_long_desc=?,product_main_image=?,product_image1=?,product_image2=?,product_image3=?,product_cost_price=?,product_selling_price=?,product_profit_price=?,retailer_name=?,product_features=?,product_link=?,similar_product_1=?,similar_product_2=?,similar_product_3=?,similar_product_4=?,brand_name=? WHERE product_id=?";
  	$stmt=$con->prepare($query);
  	$stmt->bind_param("ssssssssssssssssssss",$product_cat_id,$product_name,$product_short_desc,$product_long_desc,$new_product_main_image,$new_product_image1,$new_product_image2,$new_product_image3,$product_cost_price,$product_selling_price,$product_profit_price,$retailer_name,$product_features,$product_link,$similar_product_1,$similar_product_2,$similar_product_3,$similar_product_4,$brand_name,$product_id);
  	$stmt->execute();
	
	
	$_SESSION['response']="Updated Successfully to the database!";
	$_SESSION['res_type']="primary";
	header('location:index.php');
}
?>
