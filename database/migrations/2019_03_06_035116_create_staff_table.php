<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->date('birthday')->nullable();
            $table->text('sex');
            $table->text('religion')->nullable();
            $table->text('blood_group')->nullable();
            $table->longText('address')->nullable();
            $table->text('phone');
            $table->text('email')->nullable();
            $table->text('designation');
            $table->text('joining_date');
            $table->integer('salary');
            $table->longText('photo')->nullable();
            $table->longText('nid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
