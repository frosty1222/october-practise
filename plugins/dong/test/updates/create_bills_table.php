<?php namespace Dong\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateBillsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('dong_test_bills', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price')->default(18,0);
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('dong_test_bills');
    }
};
