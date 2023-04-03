<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sua phieu File Anh </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>

<body class="bg-light">
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Chon FIle Can sua</h3>
          </div>
          <div class="card-body">
            
            <form action="?route=updateFile" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="hoten">Avatar</label>
                <input type="file" class="form-control" id="fileupload" name="fileupload"  required>
              </div>
              
              <br/>
              <button type="submit" class="btn btn-primary w-100">cẬP NHẬT</button>
            </form>
            <?php  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</body>

</html>
