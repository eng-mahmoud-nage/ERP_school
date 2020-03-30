<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParenttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('password')->nullable();
            $table->string('parent_name_ar');
            $table->string('parent_name_en');
            $table->integer('parent_status');
            $table->string('kindship')->default('other');
            $table->string('parent_email')->nullable();
            $table->string('parent_phone')->unique();
            $table->string('parent_job')->nullable();
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
        Schema::dropIfExists('parentts');
    }
}
