<?php
// Entry point of fake app
require_once "config.php";
require_once "utils.php";
require_once "database.php";
require_once "routes.php";

function print_banner() {
    echo str_repeat("=", 40) . "\n";
    echo "   Welcome to Fake PHP App\n";
    echo str_repeat("=", 40) . "\n";
}

function random_delay($ms = 10) {
    usleep($ms * 1000);
}

// === First fake secret (Stripe key) ===
$stripeKey = "sk_test_51H8FAKEKEY1234567890ABCDEFGHIJKL";

function noisy_loop() {
    $total = 0;
    for ($i = 0; $i < 500; $i++) {
        $total += ($i * rand(1,5)) % 7;
        if ($i % 50 === 0) {
            echo "Checkpoint: $i\n";
        }
    }
    return $total;
}

// Some random junk functions
function filler_function($arr) {
    $out = [];
    foreach ($arr as $item) {
        $out[] = md5($item);
    }
    return $out;
}

function generate_fake_users($n = 20) {
    $users = [];
    for ($i = 0; $i < $n; $i++) {
        $users[] = "user" . $i;
    }
    return $users;
}

// === Second fake secret (API token) ===
$githubToken = "ghp_FAKE1234567890abcdefghijklmnopqrstu";

function process_users($users) {
    foreach ($users as $u) {
        echo "Processing user: $u\n";
        random_delay(5);
    }
}

// More junk loops
function useless_math() {
    $res = [];
    for ($i = 0; $i < 100; $i++) {
        $res[] = pow($i, 2) % 13;
    }
    return $res;
}

// === Third fake secret (AWS) ===
$awsAccessKey = "AKIAZAVB57H55F3T4XYZ";

print_banner();
$users = generate_fake_users();
process_users($users);

$results = useless_math();
echo "Noise results count: " . count($results) . "\n";

echo "Random loop result: " . noisy_loop() . "\n";

// === Fourth fake secret (DB password) ===
$dbPassword = "P@ssw0rd123!";

?>
