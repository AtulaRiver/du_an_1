<?php
session_start();
include "../model/pdo.php";
include "../model/loaiphong.php";
include "../model/phong.php";
include "../model/dichvu.php";
include "../model/taikhoan.php";
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "listlp":
            $dsloaiphong = loadall_loaiphong();
            include "loaiphong/list.php";
            break;

        case "addlp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                insert_loaiphong($name, $gia);
                $thongbao = "Thêm thành công";
            }
            include "loaiphong/add.php";
            break;

        case "xoalp";
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_loaiphong($_GET['id']);
            }
            $dsloaiphong = loadall_loaiphong();
            include "loaiphong/list.php";
            break;

        case "sualp";
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $lp = loadone_loaiphong($_GET['id']);
            }
            include "loaiphong/update.php";
            break;

        case "updatelp";
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                $gia = $_POST['gia'];
                update_loaiphong($id, $name, $gia);
                $thongbao = "cap nhat thanh cong";
            }
            $dsloaiphong = loadall_loaiphong();
            include "loaiphong/list.php";
            break;

        case "addp":
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $idnl = $_POST['idnl'];
                $idte = $_POST['idte'];
                $idlp = $_POST['idlp'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../img/rooms/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // File moved successfully.
                } else {
                    echo "Error: File could not be moved.";
                }
                insert_phong($name, $price, $img, $idnl, $idte, $idlp, $checkin, $checkout, $mota);
                $thongbao = "Thêm thành công";
            }
            $dsloaiphong = loadall_loaiphong();
            $listnguoilon = loadall_nguoilon();
            $listtreem = loadall_treem();
            include "phong/add.php";
            break;

        case 'listp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $idlp = $_POST['idlp'];
            } else {
                $idlp = 0;
            }
            $listphong = loadall_phong($idlp);
            $dsloaiphong = loadall_loaiphong();
            include 'phong/list.php';
            break;

        case "xoap":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_phong($_GET['id']);
            }
            $listphong = loadall_phong();
            include "phong/list.php";
            break;

        case "suap":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $p = loadone_phong($_GET['id']);
            }
            $dsloaiphong = loadall_loaiphong();
            $listnguoilon = loadall_nguoilon();
            $listtreem = loadall_treem();
            include "phong/update.php";
            break;

        case "updatep":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $idnl = $_POST['idnl'];
                $idte = $_POST['idte'];
                $idlp = $_POST['idlp'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $checkin = $_POST['checkin'];
                $checkout = $_POST['checkout'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../img/rooms/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // File moved successfully.
                } else {
                    echo "Error: File could not be moved.";
                }
                update_phong($id, $name, $price, $img, $idnl, $idte, $idlp, $checkin, $checkout, $mota);
                $thongbao = "Thêm thành công";
            }
            $listphong = loadall_phong($kyw, $idlp);
            $dsloaiphong = loadall_loaiphong();
            $listnguoilon = loadall_nguoilon();
            $listtreem = loadall_treem();
            include "phong/list.php";
            break;

        case "adddv":
            if (isset($_POST['themdv']) && ($_POST['themdv'])) {
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                insert_dvphong($name, $gia, $mota);
                $thongbao = "Thêm thành công";
            }
            include "dichvu/add.php";
            break;

        case "listdv":
            $dsdichvu = loadall_dvphong();
            include "dichvu/list.php";
            break;

        case "xoadv";
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_dvphong($_GET['id']);
            }
            $dsdichvu = loadall_dvphong();
            include "dichvu/list.php";
            break;

        case "suadv";
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dv = loadone_dvphong($_GET['id']);
            }
            include "dichvu/update.php";
            break;

        case "updatedv";
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                update_dvphong($id, $name, $gia, $mota);
                $thongbao = "Cập nhật thành công";
            }
            $dsdichvu = loadall_dvphong();
            include "dichvu/list.php";
            break;

        case "dangky";
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để truy cập vào website";
            }
            include("admin/taikhoan/dangky.php");
            break;

        case "dangnhap";
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header("location:index.php");
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký ";
                }
            }
            include("admin/taikhoan/dangnhap.php");
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
?>