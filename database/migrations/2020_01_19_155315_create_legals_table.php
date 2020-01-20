<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',1500);
            $table->string('title_slug',1500);
            $table->string('subtitle',1500);
            $table->string('view',1500);
            $table->string('area',1500);
            $table->string('file',1500);
            $table->bigInteger('price');
            $table->string('document_title',1500);
            $table->longText('document_body');
            $table->string('document_number');
            $table->string('document_mail');
            $table->longText('price_header');
            $table->longText('price_title');
            $table->longText('price_text');
            $table->boolean('active');
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
        Schema::dropIfExists('legals');
    }
}
