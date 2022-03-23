<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyInPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id")->nullable(false);

            $table->foreign("user_id")
                ->references("id")
                ->default("4")
                ->on("users");



            //$table->unsignedBigInteger("category_id")->nullable();
            //$table->foreign("category_id")
            //    ->references("id")
            //    ->on("categories");
        }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign("user_id");
            $table->dropColumn("user_id");

            //$table->dropForeign("category_id");
            //$table->dropColumn("category_id");
        });
    }
}
