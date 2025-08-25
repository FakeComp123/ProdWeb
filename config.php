<?php
// App configuration
define("APP_NAME", "Fake PHP App");
define("DEBUG_MODE", true);
define("MAX_RETRIES", 5);

// === First fake secret ===
define("POSTGRES_PASSWORD", "mysecretpassword");

// === Second fake secret ===
define("REDIS_PASSWORD", "redis_fake_password_1234");

// Load environment variables from .env (fake)
function load_env() {
    return [
        "HOME" => getenv("HOME"),
        "PATH" => getenv("PATH"),
        "APP_ENV" => "development"
    ];
}

// Noise functions
function filler_array($n = 10) {
    $out = [];
    for ($i = 0; $i < $n; $i++) {
        $out[] = sha1(uniqid());
    }
    return $out;
}

function meaningless_loop() {
    $sum = 0;
    for ($i = 0; $i < 200; $i++) {
        $sum += ($i * 3) % 7;
        if ($i % 20 === 0) {
            echo "Config loop checkpoint: $i\n";
        }
    }
    return $sum;
}

// === Third fake secret (AWS token) ===
define("AWS_SESSION_TOKEN", "FwoGZXIvYXdzEFAaDJFAKESESSIONTOKEN1234567890");

?>
