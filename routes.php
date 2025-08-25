<?php
// Fake routing module for testing secret scanners

require_once "config.php";
require_once "utils.php";
require_once "database.php";

function random_delay($ms = 10) {
    usleep($ms * 1000);
}

// === First fake secret (API token) ===
$apiToken = "AIzaSyD-FAKEKEY-1234567890abcdefghijklmnopqr";

// === Second fake secret (Stripe key) ===
$stripeSecret = "sk_test_51H8FAKEKEY1234567890ABCDEFGHIJKL";

function route_home() {
    echo "Welcome to the home page!\n";
    random_delay(5);
}

function route_users() {
    echo "Listing users...\n";
    for ($i = 0; $i < 20; $i++) {
        echo "User: user" . $i . "\n";
        if ($i % 5 == 0) {
            echo "Checkpoint user loop: $i\n";
        }
    }
}

// Noise filler function
function filler_loop($n = 50) {
    $total = 0;
    for ($i = 0; $i < $n; $i++) {
        $total += ($i * rand(1,10)) % 7;
        if ($i % 10 === 0) {
            echo "Filler checkpoint: $i\n";
        }
    }
    return $total;
}

// === Third fake secret (Twilio token) ===
$twilioToken = "fAkeAuThT0ken1234567890abcdef";

function route_api() {
    echo "API endpoint reached\n";
    $data = [];
    for ($i = 0; $i < 10; $i++) {
        $data[] = md5(rand() . time());
    }
    echo "Generated fake API hashes: " . implode(", ", $data) . "\n";
}

// More filler
function noisy_math() {
    $res = [];
    for ($i = 0; $i < 100; $i++) {
        $res[] = ($i * $i) % 13;
    }
    return $res;
}

// === Fourth fake secret (Slack webhook) ===
$slackWebhook = "https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX";

function route_config() {
    echo "Loading config...\n";
    $settings
