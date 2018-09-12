<?php
class rc_account {
    // properties
    public name = '';      // Title to be displayed
    public id   = '';      // to be filled by the database index
    public tw_handle = ''; // Twitter Handle e.g. @myrocuraccount
    public description ='';
    public slot_duration = ''; // curator slot duration in days
    public slot_start_day= ''; // weekday at which a slot begins
    public wp_category='';

    // methods
    public function get_upcoming_schedule(){}
    public function get_open_slot_dropdown(){}
    public function create_slot(){}

}
?>
