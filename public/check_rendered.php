<?php
$c = file_get_contents('http://localhost:8000/seo-company-in-delhi');
$pos = strpos($c, '<head>');
$end = strpos($c, '</head>');
echo "<pre>" . htmlspecialchars(substr($c, $pos, $end - $pos + 7)) . "</pre>";
