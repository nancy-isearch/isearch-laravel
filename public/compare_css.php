<?php
$c1 = file_get_contents('D:\laravel\isearch-html\src\css\compress-css\main-style-V2.min.css'); 
$c2 = file_get_contents('D:\laravel\isearch\public\assets\frontend\css\compress-css\main-style-V2.min.css'); 
echo $c1 === $c2 ? 'main-style-V2 MATCH' : 'main-style-V2 DIFF'; 
echo "\n"; 
$c3 = file_get_contents('D:\laravel\isearch-html\src\css\compress-css\pages\seoCompany-V2.min.css'); 
$c4 = file_get_contents('D:\laravel\isearch\public\assets\frontend\css\compress-css\pages\seoCompany-V2.min.css'); 
echo $c3 === $c4 ? 'seoCompany-V2 MATCH' : 'seoCompany-V2 DIFF';
