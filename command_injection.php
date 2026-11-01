<?php

// CWE-78 - OS Command Injection. User input reaches a shell command.
$host = $_GET['host'];

$command = "ping -c 1 " . $host;
system($command);

$target = $_POST['target'];
shell_exec("nslookup " . $target);
