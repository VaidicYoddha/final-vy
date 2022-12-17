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
        Schema::create('arshbooks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->nullable()->nullOnDelete();
            $table->string('name');
            $table->longText('details')->nullable();         
            $table->boolean('is_visible')->default(false);        
            $table->tinyInteger('created_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arshbooks');
    }
};
