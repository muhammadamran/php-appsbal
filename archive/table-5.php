<?php

define('NUMBER_OF_COLUMNS', 37);

function renderCalenderMonth($date)
{
    $day = date('d', $date);
    $month = date('m', $date);
    $year = date('Y', $date);

    $firstDay = mktime(0, 0, 0, $month, 1, $year);
    $title = strftime('%B', $firstDay);
    $dayOfWeek = date('D', $firstDay);
    $daysInMonth = cal_days_in_month(0, $month, $year);
    $timestamp = strtotime('next Sunday');
    $weekDays = array();

    for ($i = 0; $i < NUMBER_OF_COLUMNS; $i++) {
        $weekDays[] = strftime('%a', $timestamp);
        $timestamp = strtotime('+1 day', $timestamp);
    }
    $blank = date('w', strtotime("{$year}-{$month}-01"));
?>

    <table class="table table-bordered" border="1">
        <tr>
            <th colspan="<?= NUMBER_OF_COLUMNS ?>" class="text-center"> <?= $title ?> <?= $year ?> </th>
        </tr>
        <tr>
            <?php foreach ($weekDays as $key => $weekDay) : ?>
                <td class="text-center"><?= $weekDay ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
            <?php for ($i = 0; $i < $blank; $i++) : ?>
                <td></td>
            <?php endfor; ?>
            <?php for ($i = 1; $i <= $daysInMonth; $i++) : ?>
                <?php if ($day == $i) : ?>
                    <td><strong><?= $i ?></strong></td>
                <?php else : ?>
                    <td><?= $i ?></td>
                <?php endif; ?>
                <?php if (($i + $blank) % NUMBER_OF_COLUMNS == 0) : ?>
        </tr>
        <tr>
        <?php endif; ?>
    <?php endfor; ?>
    <?php for ($i = 0; ($i + $blank + $daysInMonth) % NUMBER_OF_COLUMNS != 0; $i++) : ?>
        <!-- <td></td> -->
    <?php endfor; ?>
        </tr>
    </table>

<?php } ?>

<?php
date_default_timezone_set("Asia/jakarta");

for ($iterateYear = date('Y') - 1; $iterateYear < date('Y') + 1; $iterateYear++) {
    for ($iterateMonth = 1; $iterateMonth <= 12; $iterateMonth++) {
        $date = strtotime(sprintf('%s-%s-01', $iterateYear, $iterateMonth));
        renderCalenderMonth($date);
    }
}
