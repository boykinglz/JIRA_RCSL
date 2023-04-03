
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  h1{
    
    margin: 60px 0px 20px 0px;
    text-align: center;
  }
  .rowCustom{
    display: flex; 
  }
  button{
    margin-right: 20px;
  }
  .formH input{
    display: none;
  }
</style>
<body>
  <h1>Danh Sách Đăng Ký</h1>

  <table class="table table-ligth table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Họ Tên</th>
      <th scope="col">Chuyên Ngành</th>
      <th scope="col">Công Ty</th>
      <th scope="col">Công cụ</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($danhSachPhieuDK as $phieu): ?>
      <tr>
        <th scope="row"><?=$phieu['MaSV']?></th>
        <td><?= $phieu['HoTen'] ?></td>
        <td><?=$phieu['ChuyenNganh']?></td>
        <td><?=$phieu['CongTy']?></td>
        <td scope="col" class="rowCustom">
        <form action="?route=delete&idPhieu=<?=$phieu['MaSV']?>" method="post">
          <button type="button " class="btn btn-danger">Xóa</button>
        </form>
        <form action="?route=cap-nhat" class="formH" method="POST">
          <input type="text" class="form-control" id="hoten" name="hoten" value= "<?= $phieu['HoTen'] ?>" >
          <input type="text" class="form-control" id="ChuyenNganh" name="ChuyenNganh" value="<?= $phieu['ChuyenNganh'] ?>">
          <input type="text" class="form-control" id="CongTy" name="CongTy" value="<?= $phieu['CongTy'] ?>">
          <input type="text" class="form-control" id="CongTys" name="id" value="<?= $phieu['MaSV'] ?>">
          <button type="submit" class="btn btn-success">Sửa</button>
         
        </form>
        
        </td>
          
    <?php endforeach ?>
   
    
  </tbody>
</table>
</body>
</html>
