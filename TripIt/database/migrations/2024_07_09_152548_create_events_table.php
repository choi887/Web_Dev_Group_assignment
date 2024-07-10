<?php

use App\Models\Category;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->decimal('price', 8, 2);
            $table->foreignIdFor(Category::class)->default(1);
            $table->foreignIdFor(Transportation::class)->default(1);
            $table->foreignIdFor(Lodging::class)->default(1);
            $table->boolean('food')->default(false);
            $table->string('image_path')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
