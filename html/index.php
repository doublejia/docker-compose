<?php

$conn = new mysqli('10.10.10.1:3306', 'root', '565859');

if (!$conn) die('error');

echo "success";
