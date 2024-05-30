<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->json('i18n');
        $table->string('image');
        $table->boolean('status');
        $table->integer('sort_order');
        $table->timestamps();
        $table->softDeletes();
    });
}

};
