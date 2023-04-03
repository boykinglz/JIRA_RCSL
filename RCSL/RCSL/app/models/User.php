<?php
class User {
  
   public static function create($fullName,$userName, $hassPass) {
    global $pdo;
    
    $sql = "INSERT INTO user (userName, pass, fullName) VALUES (:userName, :pass, :fullName)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':pass', $hassPass);
    $stmt->bindParam(':fullName', $fullName);

    return $stmt->execute();
  }
public static function login($userName) {
    global $pdo;
    
    $sql = "SELECT * FROM user WHERE userName = $userName ";
    $stmt = $pdo->query($sql);

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

 public static function update($id,$nameIMG) {
    global $pdo;
    $sql = "UPDATE `user` SET  `Avatar` = '".$nameIMG."' WHERE `idUser` = $id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute();
}
}
?>
