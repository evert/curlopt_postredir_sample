<?php

$url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/redirect.php';

echo "Loading $url<br />\n";

$curl = curl_init($url);
curL_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curL_setopt($curl, CURLOPT_POST, true);
curL_setopt($curl, CURLOPT_POSTFIELDS, "");
curL_setopt($curl, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($curl), "<br />";

$curl = curl_init($url);
curL_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curL_setopt($curl, CURLOPT_POST, true);
curL_setopt($curl, CURLOPT_POSTFIELDS, "");
curL_setopt($curl, CURLOPT_POSTREDIR, 3);
curL_setopt($curl, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($curl), "<br />";
