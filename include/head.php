<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <meta name="description" content="One" />
    <meta name="keywords" content="Two" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/my-content/icon/<?= $icon_img; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/my-content/icon/<?= $icon_img; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/my-content/icon/<?= $icon_img; ?>">
    <!-- Begin Main -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- End Main -->
    <!-- Begin Custom -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- End Custom -->
    <!-- Begin Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- End Font -->
    <!-- Begin FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
    <!-- End FONTAWESON 5 -->
    <!-- Begin Alert -->
    <script src="assets/sweet/sweetalert2.all.js"></script>
    <script src="assets/sweet/sweetalert2.all.min.js"></script>
    <script src="assets/sweet/sweetalert2.js"></script>
    <script src="assets/sweet/sweetalert2.min.js"></script>
    <!-- End Alert -->
    <!-- Begin Datatables Main -->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!-- End Datatables Main -->
    <!-- Tabel Fixed -->
    <link rel="stylesheet" href="assets/datatables/plugin/dtflexible/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="assets/datatables/plugin/dtflexible/css/fixedColumns.dataTables.css">
    <!-- Tabel Fixed -->
    <style>
        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.75rem;
            background: initial;
            background-color: #009ef7;
            color: #fff;
            font-size: 1.0625em;
        }

        .swal2-popup .swal2-title {
            font-weight: 800 !important;
            font-size: 24px !important;
            color: #000 !important;
            margin-top: -10px !important;
            margin-bottom: -5px !important;
        }

        .swal2-container.swal2-center>.swal2-popup {
            grid-column: 2;
            grid-row: 2;
            align-self: center;
            justify-self: center;
            border-radius: 0.75rem;
        }
    </style>

</head>
<?php
// DATE DAFULT
date_default_timezone_set("Asia/jakarta");

// DATE
function date_eng($date, $print_day = false)
{
    $day = array(
        1 =>
        'Mon',
        'Tue',
        'Wen',
        'Thu',
        'Fri',
        'Sat',
        'Sun'
    );
    $month = array(
        1 =>
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec'
    );
    $split    = explode('-', $date);
    $date_eng = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $date_eng;
    }
    return $date_eng;
}

// DATE SPLIT
function date_indo_s($date, $print_day = false)
{
    $day = array(
        1 =>
        'Sen',
        'Sel',
        'Rab',
        'Kam',
        'Jum',
        'Sab',
        'Min'
    );
    $month = array(
        1 =>
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    );
    $split    = explode('-', $date);
    $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

// RUPIAH
function Rupiah($angka)
{
    $hasil = "Rp. " . number_format($angka, 2, ',', '.');
    return $hasil;
}

// DECIMAL
function decimal($number)
{
    $hasil = number_format($number, 0, ",", ",");
    return $hasil;
}

// NPWP
function NPWP($value)
{
    // 12.345.678.9-012.345
    $hasil = number_format($value, 0, ',', '.');
    return $hasil;
}

function func_date_($datetime)
{
    // 2022-11-01
    $Dsystem = $datetime;
    $Date    = SUBSTR($Dsystem, 0, 10);
    // $Time    = SUBSTR($Dsystem, 10, 20);
    $result  = date_eng($Date) . ", " . date('h:i A', strtotime($Dsystem));
    return $result;
}

function func_date_blog($datetime)
{
    // 2022-11-01
    $Dsystem = $datetime;
    $Date    = SUBSTR($Dsystem, 0, 10);
    // $Time    = SUBSTR($Dsystem, 10, 20);
    $result  = date_eng($Date, TRUE) . ", " . date('h:i:s A', strtotime($Dsystem));
    return $result;
}
?>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->