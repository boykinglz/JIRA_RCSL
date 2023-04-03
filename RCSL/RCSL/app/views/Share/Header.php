<?php
session_start();
$_SESSION['f']= "rcsl";
if(isset($_SESSION["error"])){
    $_SESSION["error"];
}
?>
<div class="Wrapper">
<ul id = "Header">
    <li>
        <a href="?route=dang-ky">đăng ký phiếu thực tập</a> 
    </li>
    <li>
        <a href="?route=danh-sach">danh sách</a>
    </li>
    <li>
        <?php
           
            if(isset($_SESSION['userID'])){
                echo "<a href='?route=logout'>đăng xuất</a>"; 
            }
            else{
                echo "<a href='?route=Register'>đăng ký tài khoản</a>" ;
                echo "<li>
        <a href='?route=login'>Đăng Nhập</a>
    </li>";
            }
        ?>
    </li>
    <?php
        if(isset($_SESSION['userID']))
        echo"
            <li>
                <a href='?route=fileUpload'>
                <img id ='avtarUser' src='../img/avtar/e0e82228e24c3812615d.jpg'
                 />
                 </a>
            </li>
            "
    ?>
    
</ul>
</div>
<style>
    #Header{
        display: flex;
        align-items:center ;
         width: 1400px;
        margin : 0  auto;
        height: 45px;

    }
    #Header li{
        list-style: none;
    }
    #Header a{
        padding: 20px 10px;
        color:white;
         text-decoration: none;
       
    }
    .Wrapper{
         background-color: cadetblue;
         width: 100%;
         position: fixed;
         top:0;
        
    }
    #avtarUser{
        width:40px;
        height: 40;
        border-radius: 50%;
        image-rendering: pixelated;
}
    
</style>


