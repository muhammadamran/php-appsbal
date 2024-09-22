<?php
session_start();
include '../../../config/conf.php';

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = substr(str_shuffle($characters), 0, $length);

    return $randomString;
}

// IMAGES ICON
if (isset($_POST["icon_"])) {

    $app_id         = $_POST['app_id'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'icon_images_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'icon_images_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/icon/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/icon/" . $photos_newname);

        $query = $db->query("UPDATE apps SET icon_img='$photos_newname',
                                             updated_at='$updated_at'
                             WHERE app_id='$app_id'");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
        }
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        // echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
}

// IMAGES LOGO
if (isset($_POST["logo_"])) {

    $app_id         = $_POST['app_id'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'logo_images_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'logo_images_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/logo/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/logo/" . $photos_newname);

        $query = $db->query("UPDATE apps SET logo_img='$photos_newname',
                                             updated_at='$updated_at'
                             WHERE app_id='$app_id'");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
        }
    } else {
        $query = $db->query("UPDATE apps SET logo_img=NULL,
                                             updated_at='$updated_at'
                             WHERE app_id='$app_id'");
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        // echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
}

// IMAGES LOADER
if (isset($_POST["loader_"])) {

    $app_id         = $_POST['app_id'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'loader_images_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'loader_images_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/loader/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/loader/" . $photos_newname);

        $query = $db->query("UPDATE apps SET loader_img='$photos_newname',
                                             updated_at='$updated_at'
                             WHERE app_id='$app_id'");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
        }
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        // echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
}

// IMAGES BACKGROUND
if (isset($_POST["background_"])) {

    $app_id         = $_POST['app_id'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'background_images_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'background_images_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/background/";
    // PHOTOS

    if ($photos_size > 5060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/background/" . $photos_newname);

        $query = $db->query("UPDATE apps SET background_img='$photos_newname',
                                             updated_at='$updated_at'
                             WHERE app_id='$app_id'");
        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
        }
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        // echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
}

// UPDATE
if (isset($_POST["update_"])) {
    $app_id         = $_POST['app_id'];
    $main_color     = $_POST['main_color'];
    $hover_color    = $_POST['hover_color'];
    $app_name       = $_POST['app_name'];
    $title_name     = $_POST['title_name'];
    $company        = $_POST['company'];
    $type           = $_POST['type'];
    $version        = $_POST['version'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE apps SET main_color='$main_color',
                                         hover_color='$hover_color',
                                         app_name='$app_name',
                                         title_name='$title_name',
                                         company='$company',
                                         type='$type',
                                         version='$version',
                                         updated_at='$updated_at'
                         WHERE app_id='$app_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}