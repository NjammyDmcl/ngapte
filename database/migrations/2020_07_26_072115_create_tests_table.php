<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestre');
            $table->string('cc');
            $table->string('name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}