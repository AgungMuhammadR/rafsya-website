<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeNullableColumnsInDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->change();
            $table->json('image')->nullable()->change();
            $table->foreignId('type_id')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('designs', function (Blueprint $table) {
            //
        });
    }
}
