<?php
    include "../model/pdo.php";
    include "../model/loaiphong.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listlp":
                $dsloaiphong=loadall_loaiphong();
                include "loaiphong/list.php";
                break;
            case "addlp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $name=$_POST['name'];
                    $gia=$_POST['gia'];
                    insert_loaiphong($name,$gia);
                    $thongbao ="Thêm thành công";
                }
                include "loaiphong/add.php";
                break;  

            case "addp":
                include "phong/add.php";
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

            case "updatelp";
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



            case "bieudo":
                include "bieudo.php";
                break;  
            
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>

