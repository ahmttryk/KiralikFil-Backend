<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('real_estates', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->change();
        });
    }
};
