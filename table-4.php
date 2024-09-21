<?php
$year = 2022;
$date = new DateTime("" . $year . "-01-01");
$weekday = (int)$date->format('N');
$weekn = (int)$date->format('W');
$day = 1;
$month = 1;
$dayLabels = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

// This creates a "table head" for each month
$thead = '<tr><th>M</th><th>W</th>';
foreach ($dayLabels as $lbl) $thead .= "<th>" . $lbl . "</th>";
$thead .= '</tr>';

// This variable will hold the html table of the calendar
$calendar = '<table id="calendar" border="1" style="width: 550px; max-width: 100%;">';

// Loop each month until 12
for (; $month <= 12; $month++) {
    $calendar .= $thead;
    $monthday = 1;
    $monthmax = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $position = 0;

    while ($monthday <= $monthmax) {
        // Create month and week columns
        if ($position == 0) {
            $weekn = (int)$date->format('W');
            $calendar .= "<tr><th>" . $month . "</th><th>" . $weekn . "</th>";
            $position++;
        } // Create "non-days"
        else if ($position < $weekday) {
            $calendar .= "<td class=\"nonday\"></td>";
            $position++;
        } // Create days
        else if ($position == $weekday) {
            $calendar .= "<td class=\"day\">" . $monthday . "</td>";
            $position++;
            $weekday++;
            $monthday++;
            $date->modify('+1 day');

            if ($position == 8) {
                $position = 0;
                $weekday = 1;
            }
        }
    }

    // Finish "non-days"
    while ($position != 0) {
        $calendar .= "<td class=\"nonday\"></td>";
        $position++;
        if ($position == 8) $position = 0;
    }
    $calendar .= "</tr>";
    if ($month != 12) $calendar .= '<td colspan="9" class="monthlinebreak"></td>';
}

return $calendar;
