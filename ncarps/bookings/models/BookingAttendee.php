<?php namespace Ncarps\Bookings\Models;

use October\Rain\Database\Pivot;
use Ncarps\Bookings\Models\Booking;
use Ncarps\Bookings\Models\Attendee;

class BookingAttendee extends Pivot
{
    public $table = 'booking_attendee';
    public $belongsTo = [
        'attendee' => [
            Attendee::class,
            'table' => 'ncarps_bookings_attendees',
            'key'   => 'attendee_id'
        ],
        'booking' => [
            Booking::class,
            'table' => 'ncarps_bookings_bookings',
            'key'   => 'booking_id'
        ]
    ];

    public function afterSave()
    {
        trace_log('in pivot afterSave');
    }

    public function afterDelete()
    {
        trace_log('in pivot afterSave');
    }
}