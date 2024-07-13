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
            $table->boolean('food')->default(false);
            $table->boolean('transportation')->default(false);
            $table->boolean('lodging')->default(false);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('cover_image_path');
            $table->text('description')->nullable();
            $table->string("created_by");
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
