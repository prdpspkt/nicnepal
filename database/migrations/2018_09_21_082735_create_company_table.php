<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("address");
            $table->text("about");
            $table->string("phone");
            $table->string("email")->nullable();
            $table->string("fax")->nullable();
            $table->integer("user_id");
            $table->string("logo")->default("/images/default_logo.gif");
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
        Schema::dropIfExists('logos');
    }
}
