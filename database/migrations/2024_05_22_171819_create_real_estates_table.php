<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('real_estates', function (Blueprint $table) {
        $table->id();
        $table->integer('company_id');
        $table->integer('brand_id');
        $table->string('title', 120);
        $table->text('description');
        $table->decimal('price');
        $table->char('currency_code', 3);
        $table->integer('view_counter');
        $table->dateTime('avail_date');
        $table->integer('country_id');
        $table->integer('city_id');
        $table->integer('restrict_id');
        $table->integer('street_id');
        $table->string('postal_code', 11);
        $table->string('adress', 125);
        $table->string('full_adress', 500);
        $table->float('lat');
        $table->float('lon');
        $table->integer('provider_user_id');
        $table->integer('photographer_user_id');
        $table->timestamps();
        $table->softDeletes();
    });
}

};
