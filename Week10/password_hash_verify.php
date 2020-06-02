<?php

$text = "rahasia";
$encrypted_text = password_hash($text, PASSWORD_BCRYPT);

echo $encrypted_text;

echo "</br /><br />";

$compare = "rahasia";
$verify = password_verify($compare, $encrypted_text);
echo $verify;
