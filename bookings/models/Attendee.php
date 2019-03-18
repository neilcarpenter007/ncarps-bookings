<?php namespace Ncarps\Bookings\Models;

use Model;

/**
 * Attendee Model
 */
class Attendee extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ncarps_bookings_attendees';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];
}
