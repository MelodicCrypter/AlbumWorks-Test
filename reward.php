<?php
/**
 * Get the user's details from the database here...
 * Use-case: user must register before able to buy.
 *
 * But, for the sake of this example, we will just create
 * a dummy user, with a default of historic transaction
 * of $25
 */

// Dummy user
$user = [
    "name" => "Hugh",
    "level" => "White",
    "historicTransac" => 25
];

// The Reward Level function
function get_reward_level($user, $recentTransac)
{
    // * AlbumWorks Reward Levels *
    // White => at least $50
    // Blue => at least $125
    // Silver => at least $1,000
    // Gold => at least $2, 000
    $white = 50;
    $blue = 125;
    $silver = 1000;
    $gold = 2000;

    // This is the user's overall money spent including
    // the recent transaction
    $overall = $user['historicTransac'] + $recentTransac;

    // Determine the user's level
    if ($overall >= $white && $overall < $blue) {
        return 'White Level';
    } elseif ($overall >= $blue && $overall < $silver) {
        return 'Blue Level';
    } elseif ($overall >= $silver && $overall < $gold) {
        return 'Silver Level';
    } elseif ($overall >= $gold) {
        return 'Gold Level';
    } else {
        return 'Spend more to become a White Level member. :)';
    }

    // Update the user's current overall purchase to the database...
    // Also, update the user's level status...
}

// Test
$level = get_reward_level($user, 25);
echo($level);
