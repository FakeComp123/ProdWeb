-- Fake database dump for testing scanners
-- Noise table: users
CREATE TABLE users (
    id INT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    email VARCHAR(100),
    api_key VARCHAR(100)
);

-- === First fake secret ===
INSERT INTO users (id, username, password, email, api_key) VALUES
(1, 'alice', 'P@ssw0rd123!', 'alice@example.com', 'sk_test_51H8FAKEKEY1234567890ABCDEFGHIJKL'),
(2, 'bob', 'b0bSecret!', 'bob@example.com', 'ghp_FAKE1234567890abcdefghijklmnopqrstu'),
(3, 'charlie', 'charlie_pw', 'charlie@example.com', 'FwoGZXIvYXdzEFAaDJFAKESESSIONTOKEN1234567890');

-- Noise filler rows
INSERT INTO users (id, username, password, email, api_key) VALUES
(4, 'dave', 'random123', 'dave@example.com', 'none'),
(5, 'eve', 'qwerty!', 'eve@example.com', 'none'),
(6, 'mallory', 'hunter2', 'mallory@example.com', 'none'),
(7, 'trent', 'letmein', 'trent@example.com', 'none'),
(8, 'peggy', 'abc123', 'peggy@example.com', 'none');

-- === Second fake secret ===
CREATE TABLE secrets (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    value TEXT
);

INSERT INTO secrets (id, name, value) VALUES
(1, 'AWS_ACCESS_KEY_ID', 'AKIAFAKE1234567890FAKE'),
(2, 'AWS_SECRET_ACCESS_KEY', 'wJalrXUtnFEMI/K7MDENG/bPxRfiCYFAKEKEY1234'),
(3, 'DB_PASSWORD', 'mysecretpassword'),
(4, 'STRIPE_KEY', 'sk_test_51H8FAKEKEY1234567890ABCDEFGHIJKL'),
(5, 'GITHUB_TOKEN', 'ghp_FAKE1234567890abcdefghijklmnopqrstu');

-- Noise filler rows
INSERT INTO secrets (id, name, value) VALUES
(6, 'FAKE_SETTING_1', '12345'),
(7, 'FAKE_SETTING_2', 'abcdef'),
(8, 'FAKE_SETTING_3', 'foobar'),
(9, 'FAKE_SETTING_4', 'xyz123'),
(10, 'FAKE_SETTING_5', 'noise_value');

-- Noise table: logs
CREATE TABLE logs (
    id INT PRIMARY KEY,
    log_time DATETIME,
    message TEXT
);

-- Populate logs with filler
INSERT INTO logs (id, log_time, message) VALUES
(1, '2025-01-01 12:00:00', 'System started'),
(2, '2025-01-01 12:05:00', 'User login attempt: alice'),
(3, '2025-01-01 12:06:00', 'User login attempt: bob'),
(4, '2025-01-01 12:10:00', 'Error code 503'),
(5, '2025-01-01 12:15:00', 'Random noise message'),
(6, '2025-01-01 12:20:00', 'Another random message'),
(7, '2025-01-01 12:25:00', 'Noise log entry 1'),
(8, '2025-01-01 12:30:00', 'Noise log entry 2'),
(9, '2025-01-01 12:35:00', 'Noise log entry 3'),
(10, '2025-01-01 12:40:00', 'Noise log entry 4');

-- === Third fake secret inside config table ===
CREATE TABLE config (
    id INT PRIMARY KEY,
    config_name VARCHAR(50),
    config_value TEXT
);

INSERT INTO config (id, config_name, config_value) VALUES
(1, 'TWILIO_AUTH_TOKEN', 'fAkeAuThT0ken1234567890abcdef'),
(2, 'SLACK_WEBHOOK', 'https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX'),
(3, 'AZURE_STORAGE_KEY', 'DefaultEndpointsProtocol=https;AccountName=fake;AccountKey=fakefakefake1234567890==;EndpointSuffix=core.windows.net');

-- Noise filler
INSERT INTO config (id, config_name, config_value) VALUES
(4, 'NOISE1', 'junk1'),
(5, 'NOISE2', 'junk2'),
(6, 'NOISE3', 'junk3'),
(7, 'NOISE4', 'junk4'),
(8, 'NOISE5', 'junk5');

-- End of fake DB dump
