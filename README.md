# Ncarps Bookings

A simple bookings plugin for octobercms.
This plugin demonstrates an issue I was having with a Many to Many relationship between 2 models and a PivotModel

After enabling and running migrations for this plugin on a fresh install of October CMS, you will
need to log into the backend and add in some test data.

When updating a booking there is a section for attendees that wasn't there when creating it.

The issues i'm having are described below.

1. I want to change the total in the _total_field.htm partial on the backend booking form whenever an attendee is added to a booking.
2. The BookingAttendee pivot model's afterSave() method isn't working.
3. The BookingAttendee pivot model's afterDelete() method isn't working - but this is a known issue in OctoberCMS.


https://github.com/octobercms/october/issues/2747
