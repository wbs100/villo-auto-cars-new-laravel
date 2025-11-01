<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Using raw SQL for compatibility with all MariaDB/MySQL versions
        DB::statement('ALTER TABLE vehicles CHANGE `type` `register_status` VARCHAR(255) NOT NULL');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE vehicles CHANGE `register_status` `type` VARCHAR(255) NOT NULL');
    }
};

