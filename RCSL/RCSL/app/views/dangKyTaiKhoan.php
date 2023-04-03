<?php
//  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dang Ky Tai Khoan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body class="bg-light">

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <?php
        // if($_SESSION['isMatchPass']==true){
        //   echo '<h1 style="color:red">Mật Khẩu không giống nhau</h1>';
        // }
        ?>
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">DANG KY TAI KHOAN</h3>
          </div>
          <div class="card-body">
            <form action="?route=Register" method="post">
              <div class="form-group">
                <label for="hoten">Ho Ten</label>
                <input type="text" class="form-control" id="hoten" name="hoten" required>
              </div>
              
              <div class="form-group">
                <label for="userName">Ten dang nhap</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
              </div>
              <div class="form-group">
                <label for="pass">mat khau</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
              </div>
              <div class="form-group">
                <label for="confirmPass">nhap lai mat khau</label>
                <input type="password" class="form-control" id="confirmPass" name="confirmPass" required>
              </div>
              <br/>
              <button type="submit" class="btn btn-primary w-100">Dang ky tai khoan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</body>
</html>
