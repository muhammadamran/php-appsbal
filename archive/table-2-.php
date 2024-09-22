<?php
date_default_timezone_set("Asia/Jakarta");

define('NUMBER_OF_COLUMNS', 37);
// define('NUMBER_OF_COLUMNS', 35);

$date  = strtotime(date("Y-m-d"));
$day   = date('d', $date);
$month = date('m', $date);
$year  = date('Y', $date);

$firstDay    = mktime(0, 0, 0, $month, 1, $year);
$title       = strftime('May', $firstDay);
$dayOfWeek   = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
$timestamp   = strtotime('next Sunday');
$weekDays    = array();

for ($i = 0; $i < NUMBER_OF_COLUMNS; $i++) {
    $weekDays[] = strftime('%a', $timestamp);
    $timestamp  = strtotime('+1 day', $timestamp);
}

$blank = date('w', strtotime("{$year}-{$month}-01"));
?>



<h1 class="text-center"> <?= $title ?> <?= $year ?> </h1>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <?php foreach ($weekDays as $key => $weekDay) : ?>
                <th class="text-center"><?= $weekDay ?></th>
            <?php endforeach ?>
        </tr>
        <tr>
            <?php for ($i = 0; $i < $blank; $i++) : ?>
                <td>-</td>
            <?php endfor; ?>

            <?php for ($i = 1; $i <= $daysInMonth; $i++) : ?>
                <?php if ($day == $i) : ?>
                    <td><strong><?= $i ?></strong></td>
                <?php else : ?>
                    <td><?= $i ?></td>
                <?php endif; ?>
                <?php if (($i + $blank) % NUMBER_OF_COLUMNS == 0) : ?>
                <?php endif; ?>
        </tr>
    <tbody></tbody>
<?php endfor; ?>
<?php for ($i = 0; ($i + $blank + $daysInMonth) % NUMBER_OF_COLUMNS != 0; $i++) : ?>
    <td>-</td>
<?php endfor; ?>
</tr>
</table>