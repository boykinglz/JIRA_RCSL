
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<style>
  .container{
    margin-top: 60px
  }
</style>
<body class="bg-light">

  <div class="container">
    
    <div class="row justify-content-center mt-5">
      <?php
if(isset($_SESSION["error"]))
{
  
echo ($_SESSION["error"]);
}
?>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">ĐĂNG NHẬP</h3>
          </div>
          <div class="card-body">
            <form action="?route=login" method="post">
              <div class="form-group">
                <label for="userName">user name</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
              </div>
              
              <div class="form-group">
                <label for="Pass">Pass</label>
                <input type="text" class="form-control" id="Pass" name="Pass" required>
              </div>
              
              <br/>
              <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
            </form>

           
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
