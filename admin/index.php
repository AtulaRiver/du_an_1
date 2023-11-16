<?php
    include "../model/pdo.php"; 
    include "../model/danhmuc.php";
    include "../model/dichvu.php"; 
    include "../model/taikhoan.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listsp":
                $dsloaiphong=loadall_loaiphong();
                include "loaiphong/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name=$_POST['name'];
                    $gia=$_POST['gia'];
                    $idks=$_POST['idks'];
                    insert_loaiphong($name,$gia,$idks);
                    $thongbao ="them thanh cong";
                }
                include "loaiphong/add.php";
                break;  

            case "xoadm";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_loaiphong($_GET['id']);
                }
                $dsloaiphong=loadall_loaiphong();
                include "loaiphong/list.php";
                break;

            case "suadm";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_loaiphong($_GET['id']);
                }
                include "loaiphong/update.php";
                break;

            case "updatedm";
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $name=$_POST['name'];
                    $id=$_POST['id'];
                    $gia=$_POST['gia'];
                    $idks=$_POST['idks'];
                    update_loaiphong($id,$name,$gia,$idks);
                    $thongbao ="cap nhat thanh cong";
                }
                $dsloaiphong=loadall_loaiphong();
                include "loaiphong/list.php";
                break;

                
                case "listdv":
                    $dvphong=loadall_dvphong();
                    include "dichvu/list.php";
                    break;
                case "adddv":
                    if(isset($_POST['themdv']) && ($_POST['themdv'])){
                        $name=$_POST['name'];
                        $mota=$_POST['mota'];
                        insert_dvphong($name,$mota);
                        $thongbao ="them thanh cong";
                    }
                    include "dichvu/add.php";
                    break;  
    
                case "xoadv";
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_dvphong($_GET['id']);
                    }
                    $dvphong=loadall_dvphong();
                    include "dichvu/list.php";
                    break;
    
                case "suadv";
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm=loadone_dvphong($_GET['id']);
                    }
                    include "dichvu/update.php";
                    break;
    
                case "updatedv";
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $name=$_POST['name'];
                        $id=$_POST['id'];
                        $mota=$_POST['mota'];
                        update_dvphong($id,$name,$mota);
                        $thongbao ="cap nhat thanh cong";
                    }
                    $dvphong=loadall_dvphong();
                    include "dichvu/list.php";
                    break;

            case "bieudo":
                include "bieudo.php";
                break;  
            
            case "dangky";
            if(isset($_POST['damgky']) && ($_POST['dangky'])){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để truy cập vào website";
            }
            include("admin/taikhoan/dangky.php");
            break;
            
        }
    }else{
        include "home.php";
    }
    include "home.php";
    include "footer.php";
?>



