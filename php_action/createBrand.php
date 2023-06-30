<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['brandName'];
	$brandEmail = $_POST['brandEmail'];
	$brandNo = $_POST['brandNo'];
  $brandStatus = $_POST['brandStatus']; 

	$sql = "INSERT INTO brands (brand_name, email, contact, brand_active, brand_status) VALUES ('$brandName', '$brandEmail' , '$brandNo', '$brandStatus', 1)";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		header('location:fetchBrand.php');	
	}  
	  
     else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	 	header('location:../add-brand.php');
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST