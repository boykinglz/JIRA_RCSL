<?php
class User
{
	private $conn="";
	public function __construct()
	{
		$this->conn=mysqli_connect('localhost','root','','cnpm');
		mysqli_set_charset($this->conn,"utf8");
	}
	
	//Thêm user
	public function Them_user($email,$password,$name,$role)
	{
		$sql="INSERT INTO users ";
		$sql.="VALUES(NULL,'$email','$password','$name','$role')";
		
		$result=mysqli_query($this->conn,$sql);  //Thực thi được trả về true, ngược lại false
		if($result)   //Nếu thực thi được trả về 1
		{
			return 1;
		}
		return 0;
	}
	
	//Check Tài khoản
	public function Check_users($email,$pass)
	{
		$sql="SELECT * FROM users ";
		$sql.="WHERE user_account='$email' AND user_password='$pass'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return mysqli_fetch_all($result,MYSQLI_ASSOC);
		return 0;
	}

	public function Check_admin($email,$pass,$role=1)
	{
		$sql="SELECT * FROM users ";
		$sql.="WHERE user_account='$email' AND user_password='$pass' AND role_id='$role'"; 
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return mysqli_fetch_all($result,MYSQLI_ASSOC);
		return 0;
	}
	
	
	//Đọc tất cả user đang có trong database
	public function Doc_tat_ca_user()
	{
		$sql="SELECT * FROM users";
		$result=mysqli_query($this->conn,$sql);// thực thi được $result là true, ngược lại là false
		
		if($result)  //Nếu thực thi được trả về mảng ds các user, trong đó mỗi lần tử là một mảng ---> MẢng 2 chiều  , MYSQLI_ASSOC: đọc theo tên cột
			return mysqli_fetch_all($result,MYSQLI_ASSOC);  
			
	}
	
	
	public function Doc_user_theo_id($id)
	{
		$sql="SELECT * FROM users ";
		$sql.="WHERE user_id='$id'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) 
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		
	}
	
	public function Cap_nhat_user($id,$email,$password,$name,$role)
	{
		$sql="UPDATE users SET user_account ='$email',user_password='$password',user_name='$name',role_id='$role' ";
		$sql.="WHERE user_id='$id'"; 
		$result=mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		return 0;	
	}
	
	public function Xoa_user($id)
	{
		$sql="DELETE FROM users WHERE user_id='$id'";
		$result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		return 0;	
	}
	
		
}


//Kiểm tra
/*$user=new User();
$arr=$user->Doc_tat_ca_user();
echo "<pre>";
print_r($arr);
echo "</pre>";
*/
?>