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
        Schema::create('cat_features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("cat_id")->nullable();
            $table->bigInteger("prodoct_id")->nullable();
            $table->string("Feature_name")->nullable();
            $table->json("Feature_values")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_features');
    }
};
