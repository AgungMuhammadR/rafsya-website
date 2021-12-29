<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeIdAndDescriptionInDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->foreignId('type_id');
            $table->text('description');
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
            $table->dropColumn('type_id');
            $table->dropColumn('description');
        });
    }
}
