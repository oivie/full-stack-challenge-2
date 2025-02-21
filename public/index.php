<?php

$page = $_GET['page'] ?? 'jobs'; 
$viewFile = __DIR__ . "/views/{$page}.blade.php";

if (file_exists($viewFile)) {
    include $viewFile;
} else {
    echo "Page not found.";
}
