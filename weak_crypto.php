<?php

// CWE-327 / CWE-328 - Weak cryptography and weak hashing of sensitive data.
$secret = $_POST['secret'];

$hashed = md5($secret);
$legacy = sha1($secret);

$encrypted = openssl_encrypt($secret, 'des-ecb', 'weakkey!');
