<?php namespace Ncarps\Bookings\Models;

use Mail;
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

    public function updateTotal()
    {
        $this->total = $this->attendees()->count() * $this->price_per_attendee;
        $this->save();
    }

    public function afterSave()
    {
        // $this->sendAnEmail();
    }

    public function beforeSave()
    {
        trace_log('in before save');
    }

    public function sendAnEmail()
    {
        Mail::send('ncarps.bookings::mail.test', [], function($message) {
            $message->to('neil@impelling.co.uk', 'Neil Carpenter');
        });
    }
}
