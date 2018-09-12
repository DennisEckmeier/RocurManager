<?php
class curator {
    // properties
    public id   = '';           // to be filled by the database index
    public rocur_id = '';       // so we know which rocur account this curator belongs to
    public name = '';           // Full Name With Title
    public shortname = '';      // to be used in text
    public pronoun ='';         // pronouns to use
    public email = '';
    public tw_handle = '';      // Twitter Handle e.g. @myrocuraccount
    public feedback_form_texts='';
    public avatar_image ='';
    public handling_admin = ''; // Username of the administrator handling this curator
    public start_date= '';         // day at which a slot begins

    // methods
    public function verify_slot(){}
    public function create_announcement(){}
    public function create_announcement_title(){}
    public function create_announcement_body_prefill(){}
    public function create_announcement_set_author(){}
    public function create_announcement_set_category(){}

}
?>
