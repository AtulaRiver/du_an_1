<?php 
    include "../model/pdo.php";
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch($act) {
            case 'addlp':
                include "loaiphong/add.php";
                break;

            case 'addp':
                include "phong/add.php";
                break;
            
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "header.php";
    include "home.php";
    include "footer.php";
?>