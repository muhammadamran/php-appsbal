<?php
include "../../../config/conf.php";
$searchTerm = $_GET['term'];

$query = $db->query("SELECT * FROM accounts WHERE name LIKE '%" . $searchTerm . "%' ORDER BY account_id ASC");
while ($row = mysqli_fetch_array($query)) {
    $data[] = $row['name'];
}
echo json_encode($data);
