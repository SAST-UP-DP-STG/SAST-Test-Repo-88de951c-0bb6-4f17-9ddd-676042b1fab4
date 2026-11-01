<?php

// CWE-798 - Hard-Coded Credentials. Literal password assigned then used to connect.
$dbHost = 'db.internal.example';
$dbUser = 'app_service';
$dbPassword = 'S3cr3t-Pa55w0rd!';

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, 'app');

$apiKey = 'AKIAIOSFODNN7EXAMPLE';
$ldap = ldap_connect($dbHost);
ldap_bind($ldap, $dbUser, $dbPassword);
