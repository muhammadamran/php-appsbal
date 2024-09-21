<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbmame = 'dacom_schema';
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbmame) or die(mysqli_connect_errno());

$qconfigsetting = $db->query("SELECT * FROM apps ORDER BY app_id ASC LIMIT 1");
$rconfigsetting = mysqli_fetch_array($qconfigsetting);

$app_id = $rconfigsetting['app_id'] == NULL ? NULL : '' . $rconfigsetting['app_id'] . '';
$icon_img = $rconfigsetting['icon_img'] == NULL ? NULL : '' . $rconfigsetting['icon_img'] . '';
$logo_img = $rconfigsetting['logo_img'] == NULL ? NULL : '' . $rconfigsetting['logo_img'] . '';
$loader_img = $rconfigsetting['loader_img'] == NULL ? NULL : '' . $rconfigsetting['loader_img'] . '';
$type_background = $rconfigsetting['type_background'] == NULL ? NULL : '' . $rconfigsetting['type_background'] . '';
$background_img = $rconfigsetting['background_img'] == NULL ? NULL : '' . $rconfigsetting['background_img'] . '';
$main_color = $rconfigsetting['main_color'] == NULL ? '#fb7f01' : '' . $rconfigsetting['main_color'] . '';
$hover_color = $rconfigsetting['hover_color'] == NULL ? '#fb7f016e' : '' . $rconfigsetting['hover_color'] . '';
$app_name = $rconfigsetting['app_name'] == NULL ? 'app_name' : '' . $rconfigsetting['app_name'] . '';
$title_name = $rconfigsetting['title_name'] == NULL ? 'title_name' : '' . $rconfigsetting['title_name'] . '';
$company = $rconfigsetting['company'] == NULL ? 'company' : '' . $rconfigsetting['company'] . '';
$type = $rconfigsetting['type'] == NULL ? 'type' : '' . $rconfigsetting['type'] . '';
$version = $rconfigsetting['version'] == NULL ? 'version' : '' . $rconfigsetting['version'] . '';

$fyear = date('Y');
