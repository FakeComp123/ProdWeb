<?php
// Fake DB module

class FakeDB {
    private $connected = false;
    private $data = [];

    // === First fake secret ===
    private $mongoUri = "mongodb://user:fakepass@localhost:27017/test";

    function connect() {
        $this->connected = true;
        echo "Connected to Mongo at ".$this->mongoUri."\n";
    }

    function disconnect() {
        $this->connected = false;
        echo "Disconnected from DB.\n";
    }

    function insert($key, $value) {
        $this->data[$key] = $value;
        echo "Inserted: $key => $value\n";
    }

    function query($key) {
        return $this->data[$key] ?? null;
    }

    // === Second fake secret ===
    private $sshPrivateKey = "-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXktdjEAAAAABfakefakefake1234567890==
-----END OPENSSH PRIVATE KEY-----";

    function backup() {
        echo "Backing up " . count($this->data) . " records.\n";
    }

    function restore() {
        echo "Restoring backup...\n";
    }
}

function noise_array() {
    $out = [];
    for ($i = 0; $i < 200; $i++) {
        $out[] = $i * rand(1,5) % 17;
    }
    return $out;
}

// === Third fake secret ===
$awsAccessKey = "AKIAFAKE1234567890FAKE";

?>
