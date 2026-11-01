<?php

// CWE-79 - Cross-Site Scripting. User input is echoed into the response unencoded.
$name = $_GET['name'];

echo "<div class='greeting'>Hello, " . $name . "</div>";
