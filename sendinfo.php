<?php
session_start();

if (isset($_POST['submit'])){
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
}

	$sToken = "aXVylQ1Lu3UyZPix0ToeOTK2olKVWSaFBvycAfcnUmK";
	$sMessage = "ข้อความทดสอบ\n";
	$sMessage .= "user email: " . $email . "\n";
	$sMessage .= "user fullname: " . $fullname . "\n";
	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if ($result){
		$_SESSION['success'] = "ส่งข้อมูลสำเร็จ";
		header("location: index.php");
	}else{
			$_SESSION['error'] = "ส่งข้อมูลไม่สำเร็จ";
		header("location: index.php");
	}
	// if(curl_error($chOne)) 
	// { 
	// 	echo 'error:' . curl_error($chOne); 
	// } 
	// else { 
	// 	$result_ = json_decode($result, true); 
	// 	echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	// } 
	// curl_close( $chOne ); 

?>