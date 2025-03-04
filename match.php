<?php

$status = 600;

// match also checks the data type
$message = match ($status) {
    200, 300 => "Success",
    400, 404, 500 => "Error",
    default => "Unknown status"
};

echo $message . "\n";