<?php
session_start();
include '../../../config/conf.php';

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = substr(str_shuffle($characters), 0, $length);

    return $randomString;
}

// ADD
if (isset($_POST["add_"])) {

    $client_name    = $_POST['client_name'];
    $is_deleted     = 'false';
    $created_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'clients_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'clients_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/clients/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/clients/" . $photos_newname);

        $query = $db->query("INSERT INTO clients (client_id, client_name, image, is_deleted, deleted_at, created_at, updated_at) 
                          VALUES 
                          ('','$client_name','$photos_newname','$is_deleted','','$created_at','')");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
}

// IMAGES
if (isset($_POST["images_"])) {

    $client_id      = $_POST['client_id'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'clients_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'clients_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/clients/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/clients/" . $photos_newname);

        $query = $db->query("UPDATE clients SET image='$photos_newname',
                                    updated_at='$updated_at'
                             WHERE client_id='$client_id'");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
}


// UPDATE
if (isset($_POST["update_"])) {
    $client_id      = $_POST['client_id'];
    $client_name    = $_POST['client_name'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE clients SET client_name='$client_name',
                                            updated_at='$updated_at'
                         WHERE client_id='$client_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}

// DELETE
if (isset($_POST["delete_"])) {
    $client_id      = $_POST['client_id'];
    $deleted_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE clients SET is_deleted='true',
                                            deleted_at='$deleted_at'
                         WHERE client_id='$client_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}
