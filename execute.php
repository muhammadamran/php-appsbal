<!-- Script -->
<?php
session_start();
include "config/conf.php";

function login($data)
{
    if ($data['password_hash'] == $data['password']) {
        $_SESSION['account_id'] = $data['account_id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['gender'] = $data['gender'];
        $_SESSION['age'] = $data['age'];
        $_SESSION['blood'] = $data['blood'];
        $_SESSION['birth'] = $data['birth'];
        $_SESSION['religion'] = $data['religion'];
        $_SESSION['is_deleted'] = $data['is_deleted'];
        $_SESSION['deleted_at'] = $data['deleted_at'];
        $_SESSION['created_at'] = $data['created_at'];
        $_SESSION['updated_at'] = $data['updated_at'];
        $_SESSION['role'] = $data['role'];
        return 2;
    } else return 1;
}

if (isset($_POST["email"])) {
    $email_ = $db->real_escape_string($_POST["email"]);
} else {
    $email_ = "";
}
if (isset($_POST["password"])) {
    $password_ = $db->real_escape_string($_POST["password"]);
} else {
    $password_ = "";
}

$user = $db->query("SELECT * FROM accounts WHERE email='" . $email_ . "' AND password='" . md5(md5($password_)) . "'", 0);
$result = $user->fetch_assoc();

$account_id = $result['account_id'];
$email = $result['email'];
$password = $result['password'];
$name = $result['name'];
$gender = $result['gender'];
$age = $result['age'];
$blood = $result['blood'];
$birth = $result['birth'];
$religion = $result['religion'];
$is_deleted = $result['is_deleted'];
$deleted_at = $result['deleted_at'];
$created_at = $result['created_at'];
$updated_at = $result['updated_at'];
$role = $result['role'];

if ($role == 'Administrator' || $role == 'User') {
    $data = [
        'account_id' => $account_id,
        'email' => $email,
        'password' => $password,
        'password_hash' => md5(md5($password_)),
        'name' => $name,
        'gender' => $gender,
        'age' => $age,
        'blood' => $blood,
        'birth' => $birth,
        'religion' => $religion,
        'is_deleted' => $is_deleted,
        'deleted_at' => $deleted_at,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
        'role' => $role
    ];

    $loginarea = login($data);

    if ($loginarea == 2) {
        header("Location: ./index.php?login=true");
        // echo '<script>alert("Hai, ' . $name . '. you have successfully logged in");location.href = "index.php"</script>';
    } else if ($loginarea == 1) {
        header("Location: ./index.php?error=true");
        // echo '<script>alert("Failed Login");window.history.go(-1);</script>';
    }
} else {
    header("Location: ./index.php?error=true");
    // echo '<script>alert("Failed Login");window.history.go(-1);</script>';
}
?>
<!-- End Script -->