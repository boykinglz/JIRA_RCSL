<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dang Ky Thuc Tap</title>
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
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">PHIEU DANG KY THUC TAP</h3>
          </div>
          <div class="card-body">
            <form action="?route=add" method="post">
              <div class="form-group">
                <label for="hoten">Ho Ten</label>
                <input type="text" class="form-control" id="hoten" name="hoten" required>
              </div>
              
              <div class="form-group">
                <label for="chuyennganh">Chuyen nganh</label>
                <input type="text" class="form-control" id="chuyennganh" name="chuyennganh" required>
              </div>
              <div class="form-group">
                <label for="congty">Cong ty</label>
                <input type="text" class="form-control" id="congty" name="congty" required>
              </div>
              <br/>
              <button type="submit" class="btn btn-primary w-100">Gui Phieu Dang Ky</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
