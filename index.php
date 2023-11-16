<?php
include "view/home-page/header.php";
if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            include "view/home-page/home.php";
            break;

        case 'room-detail':
            include "view/room-detail/room-detail.php";
            break;

        case 'about':
            include "view/about/about.php";
            break;

        case 'careers':
            include "view/careers/careers.php";
            break;

        case '404':
            include "view/404/404.php";
            break;

        case "coming-soon":
            include "view/coming-soon/coming-soon.php";
            break;

        case "contact":
            include "view/contact/contact.php";
            break;

        case "facilities":
            include "view/facilities/facilities.php";
            break;

        case "services":
            include "view/services/services.php";
            break;
            
        case "spa":
            include "view/spa/spa.php";
            break;

        case "team":
            include "view/team/team.php";
            break;

        case "faq":
            include "view/faq/faq.php";
            break;

        case "gallery":
            include "view/gallery/gallery.php";
            break;

        case "news":
            include "view/news/news.php";
            break;

        case "pricing":
            include "view/pricing/pricing.php";
            break;

        case "restaurant":
            include "view/restaurant/restaurant.php";
            break;

        default:
            include "view/home-page/home.php";
            break;
    }
} else {
    include "view/home-page/home.php";
}

include "view/home-page/footer.php";
