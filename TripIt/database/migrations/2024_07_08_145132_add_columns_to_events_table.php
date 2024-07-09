<?php

use App\Models\Lodging;
use App\Models\Transportation;
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
        Schema::table('events', function (Blueprint $table) {
            $table->foreignIdFor(Transportation::class)->default(1);
            $table->foreignIdFor(Lodging::class)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn("transportation_id");
            $table->dropColumn("lodging_id");
        });
    }
};
