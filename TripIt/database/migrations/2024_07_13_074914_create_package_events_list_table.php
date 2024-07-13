<?php

use App\Models\Event;
use App\Models\Package;
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
        Schema::create('package_events_list', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Event::class)->default(1);
            $table->foreignIdFor(Package::class)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_events_list');
    }
};
