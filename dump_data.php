<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$tables = [
    'users',
    'password_reset_tokens',
    'sessions',
    'cache',
    'cache_locks',
    'jobs',
    'job_batches',
    'failed_jobs',
    'projects',
    'services',
    'team_members',
    'contact_messages',
];

$output = "-- Database Dump for SMARTOUIES\n";
$output .= "-- Generated at " . date('Y-m-d H:i:s') . "\n\n";
$output .= "SET FOREIGN_KEY_CHECKS=0;\n\n";

foreach ($tables as $table) {
    if (!Schema::hasTable($table)) {
        continue;
    }

    $output .= "-- Table structure for `$table`\n";
    $output .= "DROP TABLE IF EXISTS `$table`;\n";
    
    // Get create table statement - this is tricky across drivers.
    // Instead, we will rely on migrations for structure in a real app, 
    // but here we try to generate basic CREATE statements or just stats.
    // SQLite return different CREATE syntax than MySQL. 
    // SO, we will assume the user Run Migrations on the server, and this file is mostly for DATA.
    // BUT user on infinityfree might not have SSH. 
    // To be safe, let's just dump DATA. The user usually imports structure via Laravel Migrations locally then dumps? 
    // No, I'll generate the data inserts.
    
    $rows = DB::table($table)->get();
    
    if ($rows->count() > 0) {
        $output .= "-- Dumping data for `$table`\n";
        foreach ($rows as $row) {
            $values = [];
            foreach ((array)$row as $value) {
                if ($value === null) {
                    $values[] = "NULL";
                } elseif (is_numeric($value)) {
                    $values[] = $value;
                } else {
                    $values[] = "'" . addslashes($value) . "'";
                }
            }
            $output .= "INSERT INTO `$table` VALUES (" . implode(', ', $values) . ");\n";
        }
        $output .= "\n";
    }
}

$output .= "SET FOREIGN_KEY_CHECKS=1;\n";

file_put_contents('database_dump_data.sql', $output);

echo "Dump created successfully at database_dump_data.sql";
