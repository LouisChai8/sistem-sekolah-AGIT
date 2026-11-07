<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            if(Schema::hasColumn('students', 'class')) {
                $table->dropColumn('class');
            }
            if(Schema::hasColumn('students', 'major')) {
                $table->dropColumn('major');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            if(!Schema::hasColumn('students', 'major')) {
                $table->string('major')->after('gender');
            }
            if(!Schema::hasColumn('students', 'class')) {
                $table->string('class')->after('major');
            }
        });
    }
};