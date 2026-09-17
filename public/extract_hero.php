<?php
$content = file_get_contents('D:\laravel\isearch-html\india\seo-company-in-delhi.html');
$start = strpos($content, '<div class="hero">');
$end = strpos($content, '</section>', $start);
echo "<pre>" . htmlspecialchars(substr($content, $start, $end - $start)) . "</pre>";
