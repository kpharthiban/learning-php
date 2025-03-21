<?php

enum DaysOfWeek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::WEDNESDAY;

if ($today === DaysOfWeek::WEDNESDAY) {
    echo "It is Wed!\n";
}

enum Colour: string {
    case RED = "FF0000\n";
    case GREEN = "00FF00\n";
    case BLUE = "0000FF\n";
}

echo Colour::RED->value;

function isWeekend(DaysOfWeek $day): bool {
    return $day === DaysOfWeek:: SATURDAY || $day === DaysOfWeek::SUNDAY;
}

echo isWeekend(DaysOfWeek::MONDAY) ? "Yes" : "No";