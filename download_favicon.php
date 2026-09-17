<?php
$content = file_get_contents('https://www.isearchsolution.com/favIcon.ico');
file_put_contents('d:/laravel/isearch/public/favIcon.ico', $content);
echo "Downloaded and saved favIcon.ico\n";
