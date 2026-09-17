<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$req = Illuminate\Http\Request::create('/seo-company-in-delhi', 'GET');
$res = app()->handle($req);
$content = $res->getContent();
$pos = strpos($content, '<head>');
$end = strpos($content, '</head>');
file_put_contents(__DIR__.'/render_out.txt', substr($content, $pos, $end - $pos + 7));
