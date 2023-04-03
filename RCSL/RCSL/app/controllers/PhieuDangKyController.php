<?php
require_once('../app/models/PhieuDangKy.php');
class PhieuDangKyController {
    // hien thi phieu dang ky
    public function index() {
        require_once('../app/views/Share/Header.php');
        require_once('../app/views/dangKy.php');
    }
    // hien thi phieu cap nhat
    public function suaphieu() {
        require_once('../app/views/suaphieu.php');
    }
    // hien thi danh sach da dang ky 
    public function showPhieuDangKy() {
        $danhSachPhieuDK = PhieuDangKy::getAll();
         require_once('../app/views/Share/Header.php');
        require_once('../app/views/danhsach.php');
    }

    function createPhieuDangKy(){

        $hoten = $_POST['hoten'];
        
        $chuyennganh = $_POST['chuyennganh'];
        $congty = $_POST['congty'];

        $isSuccess = PhieuDangKy::create($hoten, $chuyennganh, $congty);
        if($isSuccess)        
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else 
            header('Location: ?route=failure');
        exit;

    }
    function updatePhieuDangKy(){
        $id = $_GET['id'];
        $hoten = $_POST['hoten'];
        
        $chuyennganh = $_POST['chuyennganh'];
        $congty = $_POST['congty'];

        $isSuccess = PhieuDangKy::update($id,$hoten, $chuyennganh, $congty);
        if($isSuccess)        
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else 
            header('Location: ?route=failure');
        exit;

    }

    function delete() {
        $id = $_GET['idPhieu'];
        $isSuccess = PhieuDangKy::delete($id);
        if($isSuccess)        
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else 
            header('Location: ?route=failure');
        exit;
    }
  
}
?>
