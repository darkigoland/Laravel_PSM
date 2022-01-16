<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmitsTable extends Migration
{
    public function up()
    {
        Schema::create('submits', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->blob('project_report');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('submitss');
    }
}