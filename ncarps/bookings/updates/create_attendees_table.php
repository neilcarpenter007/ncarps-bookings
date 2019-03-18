<?php namespace Ncarps\Bookings\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAttendeesTable extends Migration
{
    public function up()
    {
        Schema::create('ncarps_bookings_attendees', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ncarps_bookings_attendees');
    }
}
