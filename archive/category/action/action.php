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

    $bank_name      = $_POST['bank_name'];
    $bank_code      = $_POST['bank_code'];
    $contact_title  = $_POST['contact_title'];
    $contact_label  = $_POST['contact_label'];
    $bank_link      = $_POST['bank_link'];
    $created_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'bank_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'bank_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/bank/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/bank/" . $photos_newname);

        $query = $db->query("INSERT INTO bank (bank_id, bank_name, bank_code, contact_title, contact_label, bank_link, image, group_id, category_id, created_at) 
                          VALUES 
                          ('','$bank_name','$bank_code','$contact_title','$contact_label','$bank_link','$photos_newname',NULL,NULL,'$created_at')");

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

    $bank_id        = $_POST['bank_id'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['image']['tmp_name'];
    $photos_name     = $_FILES['image']['name'];
    $photos_type     = $_FILES['image']['type'];
    $photos_size     = $_FILES['image']['size'];
    $photos_file     = 'bank_' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'bank_' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/bank/";
    // PHOTOS

    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }

    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/bank/" . $photos_newname);

        $query = $db->query("UPDATE bank SET image='$photos_newname',
                                    updated_at='$updated_at'
                             WHERE bank_id='$bank_id'");

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
    $bank_id        = $_POST['bank_id'];
    $bank_name      = $_POST['bank_name'];
    $bank_code      = $_POST['bank_code'];
    $contact_title  = $_POST['contact_title'];
    $contact_label  = $_POST['contact_label'];
    $bank_link      = $_POST['bank_link'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE bank SET bank_name='$bank_name',
                                         bank_code='$bank_code',
                                         contact_title='$contact_title',
                                         contact_label='$contact_label',
                                         bank_link='$bank_link',
                                         updated_at='$updated_at'
                         WHERE bank_id='$bank_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}

// DELETE
if (isset($_POST["delete_"])) {
    $bank_id      = $_POST['bank_id'];
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("DELETE FROM bank WHERE bank_id='$bank_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}
