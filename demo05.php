<?php

header("Cache-Control: no-cache, must-revalidate");
$f = $_GET ['f'];
$s = $_GET ['s'];
echo $f - $s;

