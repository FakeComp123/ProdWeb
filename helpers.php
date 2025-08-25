<?php
// Helper functions

function random_string($length = 12) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $str;
}

// === First fake secret ===
$twilioToken = "fAkeAuThT0ken1234567890abcdef";

function checksum($data) {
    $sum = 0;
    for ($i = 0; $i < strlen($data); $i++) {
        $sum += ord($data[$i]);
    }
    return $sum % 256;
}

function noise_math($n = 50) {
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[] = sin($i) + cos($i);
    }
    return $arr;
}

// === Second fake secret ===
$firebaseKey = "AIzaSyD-FAKEKEY-1234567890abcdefghijklmnopqr";

function encrypt_fake($msg, $key = "default") {
    $out = "";
    for ($i = 0; $i < strlen($msg); $i++) {
        $out .= chr((ord($msg[$i]) + strlen($key)) % 256);
    }
    return $out;
}

function decrypt_fake($msg, $key = "default") {
    $out = "";
    for ($i = 0; $i < strlen($msg); $i++) {
        $out .= chr((ord($msg[$i]) - strlen($key)) % 256);
    }
    return $out;
}

// More junk loops
function filler_loop() {
    for ($i = 0; $i < 200; $i++) {
        if ($i % 10 === 0) {
            echo "Utils loop checkpoint: $i\n";
        }
    }
}

// === Third fake secret ===
$slackWebhook = "https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX";

?>
