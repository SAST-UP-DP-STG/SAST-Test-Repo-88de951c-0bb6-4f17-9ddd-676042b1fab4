<?php

// CWE-89 - SQL Injection. Attacker-controlled id is concatenated into the query.
$userId = $_GET['id'];

$conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), 'app');

$query = "SELECT id, name, email FROM users WHERE id = " . $userId;
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
