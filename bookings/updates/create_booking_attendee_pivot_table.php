<?php namespace Ncarps\Bookings\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBookingAttendeePivotTable extends Migration
{
    public function up()
    {
        Schema::create('booking_attendee', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('attendee_id')->unsigned();
            $table->integer('booking_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_attendee');
    }
}
