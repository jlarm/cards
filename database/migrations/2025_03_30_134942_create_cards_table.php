<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('name');
            $table->year('team');
            $table->string('set')->nullable();
            $table->string('card_number')->nullable();
            $table->string('variation')->nullable();
            $table->string('grade')->nullable();
            $table->string('graded_by')->nullable();
            $table->string('condition')->nullable();
            $table->unsignedInteger('estimated_price')->nullable();
            $table->unsignedInteger('purchase_price')->nullable();
            $table->string('status')->nullable();
            $table->unsignedInteger('sold_price')->nullable();
            $table->timestamp('sold_date')->nullable();
            $table->string('image')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
