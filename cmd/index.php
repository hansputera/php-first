<?php
// Khusus Untuk Command Prompt !

$username = 'Irwan';
$password = 'Kun';

echo '[USER] Masukan Username: ';
$user = trim(fgets(STDIN));
echo '[PASS] Masukan Password: ';
$pass = trim(fgets(STDIN));
system('cls');
if ($user === $username && $pass === $password) {
echo 'Sukses Masuk!';
} else {
echo 'Gagal Masuk!';
}
?>
