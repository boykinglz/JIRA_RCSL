<?php
require_once('../app/models/User.php');
class AcountController {
    // hien thi phieu dang ky
    public function register() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            session_start();
            $fullName = $_POST['hoten'];
            $userName = $_POST['userName'];
            $pass = $_POST['pass'];
            $confirmPass = $_POST['confirmPass'];
            if($pass != $confirmPass){
                $_SESSION['isMatchPass'] = true;
                header("Location:?route=Register");
                exit;
            }else{
                $_SESSION['isMatchPass'] = false;
                $hassPass = password_hash($pass , PASSWORD_BCRYPT);
            }
            $isSuccess1 =  User::create($fullName,$userName, $hassPass);
            if($isSuccess1) {       
                // Redirect to homepage
                header('Location: ?route=login');
            }
            else 
            {
                header('Location: ?route=failure');
                exit;
            }
            
            
        }

        require_once('../app/views/Share/Header.php');
        require_once('../app/views/dangKyTaiKhoan.php');
    }
    // hien thi phieu trang sua file
    public function fileUpload() {
        require_once('../app/views/Share/Header.php');
        require_once('../app/views/Suafileimg.php');
    }
public function login() {
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
             session_start();
            $userName = $_POST['userName'];
            $pass = $_POST['Pass'];
            
            if(empty($userName) || empty($pass)){
                $_SESSION['ERR']  = "Vui lòng nhập đầy đủ userName và pass";
                header("Location: ? route=login");
                exit;
            }
            else{
                $user =  User::login($userName);
               
                if(!empty($user)){     
                    $isSuccess = password_verify($pass, $user['pass']);
                    if($isSuccess){
                        
                    $_SESSION['userID'] = $user['idUser'];
                    
                         header("Location: ?");
                       
                    }else{
                        $_SESSION["error"]= "sai thong tin dang nhap";
                        header("Location: ? route=login");
                    }
                    exit;
                }
            
            }

       
    }
     require_once('../app/views/Share/Header.php');
    require_once('../app/views/dangnhap.php');
}
public function logout(){
    session_start();
    unset($_SESSION['userID']);
    header('Location: ?route=login');
    exit;
}
public function updateFile(){
session_start();
$idUser = $_SESSION['userID'];
$nameImg = $_FILES["fileupload"]["name"];
$target_dir = "../img/avtar/";

$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Kiểm tra xem tệp đã tồn tại hay chưa
if (file_exists($target_file)) {
    echo "tep da ton tai";
    $uploadOk = 0;
}

// Kiểm tra loại tệp tin
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    echo" khong dung dinh dang tap tin";
    $uploadOk = 0;
}

// Kiểm tra nếu có lỗi xảy ra
if ($uploadOk != 0) {
    
        if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
            $isSuccess = User::update($idUser,$nameImg);
            
            echo("upload thanh cong");
        } else {
            echo("da xay ra loi");
        }
    

} 

}
}

?>
