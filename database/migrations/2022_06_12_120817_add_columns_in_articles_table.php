<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('cover', 255)->after('title')->nullable();
            $table->bigInteger('view')->after('content')->default(0);
            $table->bigInteger('likes')->after('view')->default(0);
            $table->bigInteger('dislikes')->after('likes')->default(0);
            $table->boolean('status')->after('dislikes')->default(0);
            $table->timestamp('last_view_at')->after('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('cover');
            $table->dropColumn('view');
            $table->dropColumn('likes');
            $table->dropColumn('dislikes');
            $table->dropColumn('status');
            $table->dropColumn('last_view_at');
        });
    }
};
