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
        Schema::table('users', function (Blueprint $table) {
            // Position
            $table->string('position')->nullable();
            // Department
            $table->string('department')->nullable();
            // Face Embedding / face_embedding
            $table->text('face_embedding')->nullable();
            // image_url
            $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Position
            $table->dropColumn('position');
            // Department
            $table->dropColumn('department');
            // Face Embedding / face_embedding
            $table->dropColumn('face_embedding');
            // image_url
            $table->dropColumn('image_url');
        });
    }
};
