<?php
$password = 'itsz2015';
$hash = password_hash($password, PASSWORD_BCRYPT);
echo "Hash de la contraseña: " . $hash;
?>
