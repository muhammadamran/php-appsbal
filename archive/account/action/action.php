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

    $email          = $_POST['email'];
    $password       = md5(md5($_POST['password']));
    $role           = $_POST['role'];
    $name           = $_POST['name'];
    $gender         = $_POST['gender'];
    $birth          = $_POST['birth'];
    $age            = $_POST['age'];
    $blood          = $_POST['blood'];
    $religion       = $_POST['religion'];
    $is_deleted     = 'false';
    $created_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("INSERT INTO accounts (account_id , email, password, role, name, gender, birth, age, blood, religion, is_deleted, created_at) 
                          VALUES 
                          ('','$email','$password','$role','$name','$gender','$birth','$age','$blood','$religion','$is_deleted','$created_at')");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
    }
}

// UPDATE
if (isset($_POST["update_"])) {
    $account_id     = $_POST['account_id'];
    $role           = $_POST['role'];
    $name           = $_POST['name'];
    $gender         = $_POST['gender'];
    $birth          = $_POST['birth'];
    $age            = $_POST['age'];
    $blood          = $_POST['blood'];
    $religion       = $_POST['religion'];
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE accounts SET role='$role',
                                             name='$name',
                                             gender='$gender',
                                             birth='$birth',
                                             age='$age',
                                             blood='$blood',
                                             religion='$religion',
                                             updated_at='$updated_at'
                         WHERE account_id='$account_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}

// CHANGE PASSWORD
if (isset($_POST["changepassword_"])) {
    $account_id     = $_POST['account_id'];
    $password       = md5(md5($_POST['password']));
    $updated_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE accounts SET password='$password',
                                             updated_at='$updated_at'
                         WHERE account_id='$account_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&UpdateFailed'</script>";
    }
}

// DELETE
if (isset($_POST["delete_"])) {
    $account_id     = $_POST['account_id'];
    $deleted_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = $_POST['page'];

    $query = $db->query("UPDATE accounts SET is_deleted='true',
                                             deleted_at='$deleted_at'
                         WHERE account_id='$account_id'");

    if ($query) {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&DeleteSuccess'</script>";
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&DeleteFailed'</script>";
    }
}
