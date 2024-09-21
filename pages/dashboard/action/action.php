<?php
session_start();
include '../../../config/conf.php';

function generateRandomString($length = 10)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = substr(str_shuffle($characters), 0, $length);

    return $randomString;
}

// ADD INCOME
if (isset($_POST["add_incoming_"])) {

    $income_name    = $_POST['income_name'];
    $income_year    = $_POST['income_year'];
    // Account
    $account_id     = $_POST['account_id'];
    // Bank
    $bank_id        = $_POST['bank_id'];
    $status         = 'true';
    $created_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = 'index';
    $pageA          = 'create-income-master';

    $caccountid   = $db->query("SELECT * FROM accounts WHERE account_id='$account_id'");
    $raccountid   = mysqli_fetch_array($caccountid);
    $account_name = $raccountid['name'];

    $cbankid      = $db->query("SELECT * FROM bank WHERE bank_id='$bank_id'");
    $rbankid      = mysqli_fetch_array($cbankid);
    $bank_name    = $rbankid['bank_name'];

    // CHECKING NAME
    $account_name_ = $db->real_escape_string($account_name);
    $bank_name_    = $db->real_escape_string($bank_name);
    $income_year_  = $db->real_escape_string($_POST["income_year"]);
    $sqlname       = $db->query("SELECT * FROM income WHERE account_name='$account_name_' AND bank_name='$bank_name_' AND income_year='$income_year_'");
    $result        = $sqlname->fetch_row();

    if ($result == NULL) {
        $query = $db->query("INSERT INTO income (income_id, income_name, income_year, account_id, account_name, bank_id, bank_name, status, created_at) 
                          VALUES 
                                            ('','$income_name','$income_year','$account_id','$account_name','$bank_id','$bank_name','$status','$created_at')");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $pageA . "&NameAlready'</script>";
    }
}
if (isset($_POST["add_incoming_detail_"])) {

    $accmonth           = $_POST['accmonth'];
    $accyears           = $_POST['accyears'];

    $transaction_code   = 'TRN-INCOME-' . generateRandomString(15);
    $category_id        = $_POST['category_id'];
    $category_name      = 'Income';
    $account_id         = $_POST['account_id'];
    $account_name       = $_POST['account_name'];
    $bank_id            = $_POST['bank_id'];
    $bank_name          = $_POST['bank_name'];

    $transaction_name   = $_POST['transaction_name'];
    $transaction_method = $_POST['transaction_method'];
    $transaction_others = '-';
    $transaction_at     = $_POST['transaction_at'];
    $amount             = str_replace(['Rp', '.', ' ', ',', ',00'], ['', '', '', '', ''], $_POST['amount']);

    $expl               = SUBSTR($transaction_at, 0, 10);
    $ddmmyy             = explode('-', $expl);
    $dd                 = $ddmmyy[2];
    $mm                 = $ddmmyy[1];
    $yy                 = $ddmmyy[0];

    $day                = $dd;
    $month              = $mm;
    $year               = $yy;

    $description        = $_POST['description'];
    $created_at         = date('Y-m-d H:i:s');
    $modul              = $_POST['modul'];
    $page               = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['thumbnail']['tmp_name'];
    $photos_name     = $_FILES['thumbnail']['name'];
    $photos_type     = $_FILES['thumbnail']['type'];
    $photos_size     = $_FILES['thumbnail']['size'];
    $photos_file     = 'TRN-INCOME-' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'TRN-INCOME-' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/transaction/";
    // PHOTOS
    // echo $accmonth . "<->" . $month;
    // echo "<br>";
    // echo $accyears . "-" . $year;
    // exit;

    // if ($accmonth == $day && $accyears == $yy) {
    if ($accmonth == $month && $accyears == $year) {
        if ($photos_size > 2060826) {
            echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
            die;
        }
        if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

            move_uploaded_file($photos_tmp, "../../../assets/my-content/transaction/" . $photos_newname);

            // Insert Transaction
            $query = $db->query("INSERT INTO transaction (transaction_id,transaction_code,category_id,category_name,account_id,account_name,bank_id,bank_name,transaction_name,transaction_method,transaction_others,transaction_at,amount,day,month,year,description,thumbnail,created_at) 
                                                         VALUES 
                                                         ('','$transaction_code','$category_id','$category_name','$account_id','$account_name','$bank_id','$bank_name','$transaction_name','$transaction_method','$transaction_others','$transaction_at','$amount','$day','$month','$year','$description','$photos_newname','$created_at')");

            // Update Income
            if ($accmonth == '01') {
                $val_field = 'income_jan';
            } else if ($accmonth == '02') {
                $val_field = 'income_feb';
            } else if ($accmonth == '03') {
                $val_field = 'income_mar';
            } else if ($accmonth == '04') {
                $val_field = 'income_apr';
            } else if ($accmonth == '05') {
                $val_field = 'income_may';
            } else if ($accmonth == '06') {
                $val_field = 'income_jun';
            } else if ($accmonth == '07') {
                $val_field = 'income_jul';
            } else if ($accmonth == '08') {
                $val_field = 'income_aug';
            } else if ($accmonth == '09') {
                $val_field = 'income_sep';
            } else if ($accmonth == '10') {
                $val_field = 'income_oct';
            } else if ($accmonth == '11') {
                $val_field = 'income_nov';
            } else if ($accmonth == '12') {
                $val_field = 'income_dec';
            }

            $query .= $db->query("UPDATE income SET $val_field='$amount',
                                                    updated_at='$created_at'
                                  WHERE income_id='$category_id'");

            if ($query) {
                echo "<script>location.href = '../../../index.php?AddSuccessE'</script>";
            } else {
                echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
            }
        } else {
            echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        }
    } else {
        echo "<script>location.href = '../../../index.php?&NotMatch'</script>";
    }
}

// ADD EXPENSES
if (isset($_POST["add_expenses_"])) {

    $expenses_name    = $_POST['expenses_name'];
    $expenses_year    = $_POST['expenses_year'];
    // Account
    $account_id     = $_POST['account_id'];
    // Bank
    $status         = 'true';
    $created_at     = date('Y-m-d H:i:s');
    $modul          = $_POST['modul'];
    $page           = 'index';
    $pageA          = 'create-expenses-master';

    $caccountid   = $db->query("SELECT * FROM accounts WHERE account_id='$account_id'");
    $raccountid   = mysqli_fetch_array($caccountid);
    $account_name = $raccountid['name'];

    // CHECKING NAME
    $account_name_  = $db->real_escape_string($account_name);
    $expenses_name_ = $db->real_escape_string($expenses_name);
    $expenses_year_ = $db->real_escape_string($_POST["expenses_year"]);
    $sqlname        = $db->query("SELECT * FROM expenses WHERE account_name='$account_name_' AND expenses_name='$expenses_name_' AND expenses_year='$expenses_year_'");
    $result         = $sqlname->fetch_row();

    if ($result == NULL) {
        $query = $db->query("INSERT INTO expenses (expenses_id, expenses_name, expenses_year, account_id, account_name, status, created_at) 
                          VALUES 
                                            ('','$expenses_name','$expenses_year','$account_id','$account_name','$status','$created_at')");

        if ($query) {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddSuccess'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $pageA . "&NameAlready'</script>";
    }
}

if (isset($_POST["add_expenses_detail_"])) {

    $accmonth           = $_POST['accmonth'];
    $accyears           = $_POST['accyears'];

    $transaction_code   = 'TRN-MONTHLY-EXPENSES-' . generateRandomString(15);
    $category_id        = $_POST['category_id'];
    $category_name      = 'Expenses';
    $account_id         = $_POST['account_id'];
    $account_name       = $_POST['account_name'];

    $transaction_name   = $_POST['transaction_name'];
    $transaction_method = $_POST['transaction_method'];
    $transaction_others = '-';
    $transaction_at     = $_POST['transaction_at'];
    $amount             = str_replace(['Rp', '.', ' ', ',', ',00'], ['', '', '', '', ''], $_POST['amount']);

    $expl               = SUBSTR($transaction_at, 0, 10);
    $ddmmyy             = explode('-', $expl);
    $dd                 = $ddmmyy[2];
    $mm                 = $ddmmyy[1];
    $yy                 = $ddmmyy[0];

    $day                = $dd;
    $month              = $mm;
    $year               = $yy;

    $description        = $_POST['description'];
    $created_at         = date('Y-m-d H:i:s');
    $modul              = $_POST['modul'];
    $page               = $_POST['page'];

    // Max PHOTOS = 2097152 (5MB)
    // PHOTOS
    $photos_tmp      = $_FILES['thumbnail']['tmp_name'];
    $photos_name     = $_FILES['thumbnail']['name'];
    $photos_type     = $_FILES['thumbnail']['type'];
    $photos_size     = $_FILES['thumbnail']['size'];
    $photos_file     = 'TRN-MONTHLY-EXPENSES-' . date('d_F_Y') . '_' . date('H_i_s') . '_' . $photos_name;
    $photos_exp      = explode('.', $photos_file);
    $photos_ext      = end($photos_exp);
    $photos_wdot     = substr($photos_file, 0, -4);
    $photos_newname  = 'TRN-MONTHLY-EXPENSES-' . date('d_F_Y') . '_' . date('H_i_s') . '.' . $photos_ext;
    $photos_folder   = "../../../assets/my-content/transaction/";
    // PHOTOS

    // if ($accmonth == $month && $accyears == $year) {
    if ($photos_size > 2060826) {
        echo "<script>alert('Check File Size!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
        die;
    }
    if ($photos_ext == 'PNG' || $photos_ext == 'JPG' || $photos_ext == 'JPEG' || $photos_ext == 'png' || $photos_ext == 'jpg' || $photos_ext == 'jpeg' || $photos_ext == 'svg' || $photos_ext == 'gif') {

        move_uploaded_file($photos_tmp, "../../../assets/my-content/transaction/" . $photos_newname);

        // Insert Transaction
        $query = $db->query("INSERT INTO transaction (transaction_id,transaction_code,category_id,category_name,account_id,account_name,transaction_name,transaction_method,transaction_others,transaction_at,amount,day,month,year,description,thumbnail,created_at) 
                                                         VALUES 
                                                         ('','$transaction_code','$category_id','$category_name','$account_id','$account_name','$transaction_name','$transaction_method','$transaction_others','$transaction_at','$amount','$day','$month','$year','$description','$photos_newname','$created_at')");

        // Update Expenses
        if ($accmonth == '01') {
            $val_field = 'expenses_jan';
        } else if ($accmonth == '02') {
            $val_field = 'expenses_feb';
        } else if ($accmonth == '03') {
            $val_field = 'expenses_mar';
        } else if ($accmonth == '04') {
            $val_field = 'expenses_apr';
        } else if ($accmonth == '05') {
            $val_field = 'expenses_may';
        } else if ($accmonth == '06') {
            $val_field = 'expenses_jun';
        } else if ($accmonth == '07') {
            $val_field = 'expenses_jul';
        } else if ($accmonth == '08') {
            $val_field = 'expenses_aug';
        } else if ($accmonth == '09') {
            $val_field = 'expenses_sep';
        } else if ($accmonth == '10') {
            $val_field = 'expenses_oct';
        } else if ($accmonth == '11') {
            $val_field = 'expenses_nov';
        } else if ($accmonth == '12') {
            $val_field = 'expenses_dec';
        }

        $query .= $db->query("UPDATE expenses SET $val_field='$amount',
                                                    updated_at='$created_at'
                                  WHERE expenses_id='$category_id'");

        if ($query) {
            echo "<script>location.href = '../../../index.php?AddSuccessE'</script>";
        } else {
            echo "<script>location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&AddFailed'</script>";
        }
    } else {
        echo "<script>alert('Check File Type!');location.href = '../../../index.php?m=" . $modul . "&s=" . $page . "&Type'</script>";
    }
    // } else {
    // echo "<script>location.href = '../../../index.php?&NotMatch'</script>";
    // }
}
