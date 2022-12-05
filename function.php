<?php

	include "connection.php";


	function displayClasses($conn){
		$sql= "SELECT * FROM class";
		$res= mysqli_query($conn, $sql);
		if(mysqli_num_rows($res)>0){
			$data= array();
			while($row= mysqli_fetch_assoc($res)){
				$data[]=$row; 
			}
			return $data;
		}
	}
	function displayTeacher($conn){
		$sql="SELECT * FROM teacher";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0){
			$data= array();
			while($row=mysqli_fetch_assoc($res)){
				$data[]=$row;
			}
			return $data;
		}
	}	
	
	if(isset($_POST['enquiryform'])){
		$name=htmlspecialchars(stripcslashes(trim($_POST['name'])));
	    $contact=htmlspecialchars(stripcslashes(trim($_POST['contact'])));
		$email=htmlspecialchars(stripcslashes(trim($_POST['email'])));
        $message=htmlspecialchars(stripcslashes(trim($_POST['message'])));

		$sql="INSERT INTO `enquiry`( `name`, `contact`, `email`,`message`) VALUES ('$name','$contact','$email','$message')";
		if(mysqli_query($conn,$sql)){
			echo ("enquiry submit,You will get answer shortly");
		}

	}
//-----------
	function displayGalary($conn){
		$sql="SELECT * FROM event ";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0){
			$data= array();
			while($row=mysqli_fetch_assoc($res)){
				$data[]=$row;
			}
			return $data;
		}
	}
	//----------------------display testimonial-----------------
	function displaytestimonial($conn){
		$sql="SELECT * FROM testimonial";
		$res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
        	$data= array();
        	while($row=mysqli_fetch_assoc($res)){
                 $data[]=$row;
        	}
        	return $data;
        }
	}
	//------------------------display homepage---------------------
	function displayhomepage($conn){
		$sql="SELECT * FROM homepage";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($res);
		return $row;
	}
	//----------------account-----------------
	function displayaccount($conn){
		$sql="SELECT * FROM account";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($res);
		return $row;
	}
 ?>