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
        Schema::table('projects', function (Blueprint $table) {
            // 1. create the column that will hold the a foreign key
            $table->unsignedBigInteger('type_id')->nullable()->after('id'); /* table projects:new col 'type_id'*/
            // 2. Assing the foreign key to the column created above
            $table->foreign('type_id') /* la chiave type_id */
            ->references('id')->on('types') /* fa riferimento al id nella tabella 'types' */
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_type_id_foreign'); // 1. Drop the foreign key
            $table->dropColumn('type_id'); /* 2. Drop the column */
        });
    }
};
