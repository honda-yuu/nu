<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower_month', function (Blueprint $table) {
            $table->foreignId('month_id')->constrained('months');
            $table->foreignId('flower_id')->constrained('flowers');
            $table->primary(['month_id', 'flower_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flower_month');
    }
};
