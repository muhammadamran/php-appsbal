<?php
include "config/conf.php";
ini_set('display_errors', 0);
ini_set('max_execution_time', 0);
date_default_timezone_set("Asia/Jakarta");
session_start();

$accountid  = $_SESSION['account_id'];
$get_data   = $db->query("SELECT * FROM log_session WHERE account_id='$accountid' AND status='Success' ORDER BY session_id DESC");
$show_data  = $get_data->fetch_assoc();

$sessionid  = $show_data['session_id'];
$log_date   = date("Y-m-d");
$log_time   = date("H:i:s A");

// Query Update Status Logout
$logout     = $db->query("UPDATE log_session SET status='Logout',
                                                 logout_date='$log_date',
                                                 logout_time='$log_time'
                                             WHERE session_id='$sessionid'");

session_destroy();
unset($_SESSION['account_id']);
unset($_SESSION['role_id']);
unset($_SESSION['role_code']);
unset($_SESSION['role_name']);
unset($_SESSION['photo']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['first_name']);
unset($_SESSION['middle_name']);
unset($_SESSION['last_name']);
unset($_SESSION['gender']);
unset($_SESSION['blood']);
unset($_SESSION['birth']);
unset($_SESSION['age']);
unset($_SESSION['religion']);
unset($_SESSION['email']);
unset($_SESSION['telephone']);
unset($_SESSION['deleted_at']);
unset($_SESSION['created_at']);
unset($_SESSION['updated_at']);
unset($_SESSION['status']);
header("Location: ./index.php?OutAccess=true");
