<!--

/***************************************************************************************/
*    Title: eatlunchbox                                                                * 
*    Author: Shashank Shrivastav                                                       *
*    Email: contactshashank10@gmail.com                                                *
*    Date: 2019                                                                        *
*    Code version: 1.0                                                                 *
*    Availability: https://github.com/GodOfPerceptionn                                 *
*                                                                                      *
/***************************************************************************************/
(Version 1.0) [Source code]. https://github.com/GodOfPerception

 -->

<?php   

include 'connection.php';

if(isset($_POST['order-btn'])){
	$item_name=$_POST['item_name'];
	$category=$_POST['category'];
	$customer_name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
 	$total = $quantity * $price;
	$sql = "INSERT INTO orders(customer_name,email,phone,address,item_name,quantity,total) VALUES('$customer_name','$email','$phone','$address','$item_name','$quantity','$total')";

	$result = $conn->query($sql);
	if($result){
	  header("location:notification.php?customer_name='$customer_name' && phone='$phone'&&item_name='$item_name'");
	}
}
?>

 