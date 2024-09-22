<?php
session_start();
include "config/conf.php";
?>
<style>
.main-bg {
    background-color: <?=$main_color ?> !important;
}


.main-bg:hover {
    background-color: <?=$hover_color ?> !important;
}

.hover-bg {
    background: linear-gradient(45deg, #000000, #607D8B);
}

#bg-login {
    background-image: url('assets/my-content/background/<?= $background_img; ?>');
    background-size: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    opacity: 55%;
}
</style>
<?php

$url = $_SERVER['REQUEST_URI'];
$get_api = explode('/', $url);

if ($get_api[1] == 'api') {
    include $get_api[1] . '/' . $get_api[2] . '.php';
} else {
    if (!empty($_SESSION['role_name'])) {
        include "include/head.php";
        include "include/cssDatatables.php";

        include "include/begin-app.php";
        include "include/header.php";
        include "include/sidebar.php";
        include "include/begin-main.php";

        if (empty($_GET['m']) and empty($_GET['s'])) {
            include "pages/home/index.php";
        } else if ($_GET['m'] != "" and $_GET['s'] != "") {
            if (file_exists("pages/" . $_GET['m'] . "/" . $_GET['s'] . ".php")) {
                include "pages/" . $_GET['m'] . "/" . $_GET['s'] . ".php";
            } else {
                include "404.php";
            }
        }

        include "include/copyright.php";
        include "include/end-main.php";
        include "include/aside.php";
        include "include/end-app.php";
        include "include/drawers.php";
        include "include/scrolltop.php";
        include "include/modal.php";
        include "include/footer.php";
        if ($_GET['m'] == 'dashboard') {
            include "include/ckeditor.php";
        }
        include "include/jsDatatables.php";
        include "include/alert/danger.php";
        include "include/alert/info.php";
        include "include/alert/success.php";
        include "include/alert/warning.php";
    } else {
        include "login.php";
    }
}