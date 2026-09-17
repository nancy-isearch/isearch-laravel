<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$page = App\Models\Page::with('pageSections')->find(1);
echo "Page Sections Count: " . count($page->pageSections) . "\n";
foreach ($page->pageSections as $section) {
    echo "Section Template ID: " . $section->section_template_id . "\n";
    echo "Data: " . json_encode($section->section_data) . "\n\n";
}
