<?php
    // nhúng kết nối csdl
    include "dao/pdo.php";
    // include "dao/danhmuc.php";
    // include "dao/sanpham.php";
    include "dao/khach-hang.php";

    include "view/header.php";

    // $listbook=get_dssp_conban(1,10);
    $listUsser=user_select_all();
    // $listuser_bongban=user_by_clb(1);
    
    if(!isset($_GET['pg'])){
        include "view/home.php";
        
    }else{
        switch ($_GET['pg']) {
            case 'home':
                if(isset($_POST["nhap"])){
                    $hoTen=$_POST["hoTen"];
                    $ngaySinh=$_POST["ngaySinh"];
                    $diem=$_POST["diem"];
                    user_insert($hoTen,$ngaySinh,$diem);
                    $listUsser=user_select_all();
                    header("location:index.php");
                }
                include "view/home.php";
                break;
            default:
                
                include "view/home.php";
                break;
        }
    }
    



?>