<?php
session_start();
include("lib/user.php");
if(isset($_POST['btn_submit_login']))  //Khi nút đăng nhập được click
{
	// Lấy thông tin form
	$email=$_POST['email_dang_nhap'];
	$pass=$_POST['password_dang_nhap'];
	
	if($email != "" && $pass !="")
	{
		$user= new User();
		$kq=$user->Check_user($email,md5($pass));
		
		if($kq)
		{
			$_SESSION['users']['user_name']=$kq[0]['user_name'];
			$_SESSION['users']['user_id']=$kq[0]['user_id'];
			header('location:index.php');
		}
		else
		{
			echo "<script>alert('Email hoặc Password không đúng!!');window.location='index.php'</script>";
		}	
	}
	else
	{
		echo "<script>alert('Vui lòng điền đủ thông tin!');window.location='index.php'</script>";
	}
}
?>