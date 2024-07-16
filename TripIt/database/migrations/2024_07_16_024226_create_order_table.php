<?php

use App\Models\User;
use App\OrderStatus;
use App\Type as AppType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mockery\Matcher\Type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->unsignedBigInteger('item_id');
            $table->enum('status', array_column(OrderStatus::cases(), 'value'))->default(OrderStatus::ONGOING->value);
            $table->enum('type', array_column(AppType::cases(), 'value'))->default(AppType::EVENT->value);
            $table->foreignIdFor(User::class)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
