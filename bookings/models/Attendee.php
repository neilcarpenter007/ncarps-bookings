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

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
