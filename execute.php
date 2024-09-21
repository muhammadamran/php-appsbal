<!-- Script -->
<?php
session_start();
include "config/conf.php";

function login($data)
{
    if ($data['password_hash'] == $data['password']) {
        $_SESSION['account_id'] = $data['account_id'];
        $_SESSION['role_id'] = $data['role_id'];
        $_SESSION['role_code'] = $data['role_code'];
        $_SESSION['photo'] = $data['photo'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['first_name'] = $data['first_name'];
        $_SESSION['middle_name'] = $data['middle_name'];
        $_SESSION['last_name'] = $data['last_name'];
        $_SESSION['gender'] = $data['gender'];
        $_SESSION['blood'] = $data['blood'];
        $_SESSION['birth'] = $data['birth'];
        $_SESSION['age'] = $data['age'];
        $_SESSION['religion'] = $data['religion'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['telephone'] = $data['telephone'];
        $_SESSION['deleted_at'] = $data['deleted_at'];
        $_SESSION['created_at'] = $data['created_at'];
        $_SESSION['updated_at'] = $data['updated_at'];
        $_SESSION['status'] = $data['status'];
        return 2;
    } else return 1;
}

if (isset($_POST["username"])) {
    $username_ = $db->real_escape_string($_POST["username"]);
} else {
    $username_ = "";
}
if (isset($_POST["password"])) {
    $password_ = $db->real_escape_string($_POST["password"]);
} else {
    $password_ = "";
}

$user   = $db->query("SELECT * FROM accounts AS a
                      LEFT OUTER JOIN roles AS b ON a.role_id=b.role_id AND a.role_code=b.role_code
                      WHERE a.username='" . $username_ . "' AND a.password='" . md5(md5($password_)) . "'", 0);
$result = $user->fetch_assoc();

$account_id = $result['account_id'];
$role_id = $result['role_id'];
$role_code = $result['role_code'];
$photo = $result['photo'];
$username = $result['username'];
$password = $result['password'];
$first_name = $result['first_name'];
$middle_name = $result['middle_name'];
$last_name = $result['last_name'];
$gender = $result['gender'];
$blood = $result['blood'];
$birth = $result['birth'];
$age = $result['age'];
$religion = $result['religion'];
$email = $result['email'];
$telephone = $result['telephone'];
$deleted_at = $result['deleted_at'];
$created_at = $result['created_at'];
$updated_at = $result['updated_at'];
$status = $result['status'];

if ($result != NULL) {
    $data = [
        'account_id' => $account_id,
        'role_id' => $role_id,
        'role_code' => $role_code,
        'photo' => $photo,
        'username' => $username,
        'password' => $password,
        'password_hash' => md5(md5($password_)),
        'first_name' => $first_name,
        'middle_name' => $middle_name,
        'last_name' => $last_name,
        'gender' => $gender,
        'blood' => $blood,
        'birth' => $birth,
        'age' => $age,
        'religion' => $religion,
        'email' => $email,
        'telephone' => $telephone,
        'deleted_at' => $deleted_at,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
        'status' => $status
    ];

    $loginarea = login($data);

    if ($loginarea == 2) {
        header("Location: ./index.php?login=true");
    } else if ($loginarea == 1) {
        header("Location: ./index.php?error=true");
    }
} else {
    header("Location: ./index.php?error=true");
}
?>
<!-- End Script -->