<?php namespace Ncarps\Bookings\Models;

use Model;
use Ncarps\Bookings\Models\Attendee;
use Ncarps\Bookings\Models\BookingAttendee;

class Booking extends Model
{

    public $table = 'ncarps_bookings_bookings';

    protected $guarded = ['*'];

    protected $fillable = ['title', 'price_per_attendee', 'total'];

    public $belongsToMany = [
        'attendees' => [
            Attendee::class,
            'table'      => 'booking_attendee',
            'timestamps' => true,
            'pivotModel' => BookingAttendee::class,
        ]
    ];
}
