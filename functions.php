<?php
function calculateAge($dateOfBirth) {
    try {
        $dob = new DateTime($dateOfBirth);
    } catch (Exception $e) {
        echo "incorrect date format";
    }
    $today = new DateTime();
    $interval = $today->diff($dob);
    return $interval->y;
}