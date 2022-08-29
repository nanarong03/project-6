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
        Schema::create('slide_home_', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name')->nullable()->comment('ชื่อหน้าแรก');
            $table->text('details')->nullable()->comment('รายละเอียดหน้าแรก');
            $table->integer('created_by')->nullable()->comment('user ที่เพิ่ม');
            $table->integer('updated_by')->nullable()->comment('user ที่แก้ไข');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_home_');
    }
};
