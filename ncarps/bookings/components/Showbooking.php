<?php namespace Ncarps\Bookings\Components;

use Cms\Classes\ComponentBase;
use Ncarps\Bookings\Models\Booking;

class Showbooking extends ComponentBase
{
    public $booking;

    public function componentDetails()
    {
        return [
            'name'        => 'showbooking Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->booking = $this->getBooking();
        $this->booking->save();
    }

    public function getBooking()
    {
        return Booking::first();
    }
}
