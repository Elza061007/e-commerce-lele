<?php

// Set the base path for Laravel when running on Vercel
$_ENV['APP_BASE_PATH'] = dirname(__DIR__);

// Forward Vercel serverless requests into Laravel
require __DIR__ . '/../public/index.php';
