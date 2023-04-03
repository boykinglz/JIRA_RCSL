<?php
class PhieuDangKy {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM phieudangkythuctap');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  //tao phieu dang ky
  public static function create($hoten, $chuyennganh, $congty) {
    global $pdo;
    
    $sql = "INSERT INTO phieudangkythuctap (HoTen, ChuyenNganh, CongTy) VALUES (:hoten, :chuyennganh, :congty)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':hoten', $hoten);
    $stmt->bindParam(':chuyennganh', $chuyennganh);
    $stmt->bindParam(':congty', $congty);

    return $stmt->execute();
  }

  // xóa phiếu đăng ký
  public static function delete($id) {
    global $pdo;
    $sql = "DELETE FROM `phieudangkythuctap` WHERE `phieudangkythuctap`.`MaSV` = $id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute();
  }
  // xóa phiếu đăng ký
  public static function update($id,$hoten,$chuyennganh,$congty) {
    global $pdo;
    $sql = "UPDATE `phieudangkythuctap` SET `HoTen` = '".$hoten."', `ChuyenNganh` = '".$chuyennganh."', `CongTy` = '".$congty."' WHERE `phieudangkythuctap`.`MaSV` = $id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute();
  }
}
?>