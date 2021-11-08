<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('path')->nullable(false);

            // PROPER TITLE TO THE PROPERTY AND CAN BE USED IN THE SEARCH
            $table->string('title')->nullable(false);
            $table->text('notes')->nullable(false);

            $table->foreignId('city_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('region_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            // IS HE OWNER OR MEDIATOR.
            // STRING BCZ MEDIATOR CAN RANGE IN NUMBER: MEDIATOR+1, MEDIATOR+2.. MEDIATOR+N
            $table->string('type')->nullable(false);

            $table->integer('price');

            // NAME AND NUMBER OF THE OWNER
            $table->string('name')->nullable(false);
            $table->string('number')->nullable(false);

            // USER WHO ADDED THIS
            $table->foreignId('user_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            //  CAN BE USED TO COUNT SOLD PROPERTIES
            $table->boolean('is_sold')->default(0);

            $table->softDeletes();

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
        Schema::dropIfExists('properties');
    }
}
