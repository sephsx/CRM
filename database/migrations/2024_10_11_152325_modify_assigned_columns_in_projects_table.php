<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            // Check if the column does not exist before adding it
            if (!Schema::hasColumn('projects', 'assigned_client')) {
                $table->unsignedBigInteger('assigned_client')->nullable()->after('assigned_user');
            }
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            // Drop the column only if it exists
            if (Schema::hasColumn('projects', 'assigned_client')) {
                $table->dropColumn('assigned_client');
            }
        });
    }
};
