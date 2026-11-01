# php-test-project (limited)

Deliberately vulnerable PHP fixture for Mend SAST gen2 (PHP) automation tests.
Do **not** deploy — every file plants a known finding on purpose.

Each file is a **self-contained flow**: the taint source (`$_GET` / `$_POST`) and the
dangerous sink live in the same file, with no autoloader or cross-file call graph, so a
taint-based engine can trace every planted finding.

| File | CWE | Expected severity |
|------|-----|-------------------|
| `sqli.php` | CWE-89 SQL Injection | High |
| `xss.php` | CWE-79 Cross-Site Scripting | High |
| `command_injection.php` | CWE-78 OS Command Injection | High |
| `weak_crypto.php` | CWE-327 / CWE-328 Weak crypto & hash | Medium / Low |
| `hardcoded_credentials.php` | CWE-798 Hard-Coded Credentials | Medium |
