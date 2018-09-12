<?php
function detrm_activate() {

    // setting up the database
    /*You must put each field on its own line in your SQL statement.
    You must have two spaces between the words PRIMARY KEY and the definition of your primary key.
    You must use the key word KEY rather than its synonym INDEX and you must include at least one KEY.
    KEY must be followed by a SINGLE SPACE then the key name then a space then open parenthesis with the field name then a closed parenthesis.
    You must not use any apostrophes or backticks around field names.
    Field types must be all lowercase.
    SQL keywords, like CREATE TABLE and UPDATE, must be uppercase.
    You must specify the length of all fields that accept a length parameter. int(11), for example.*/

    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $table_name_curators = $wpdb->prefix . "detrm_curator";
    $sql_curator = "CREATE TABLE $table_name_curators (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            rocur_id mediumint(9) NOT NULL,
            name tinytext NOT NULL,
            tw_handle tinytext NOT NULL,
            start_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL
            PRIMARY KEY  (id))
            $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql_curator );

    $table_name_rocurs = $wpdb->prefix . "detrm_rocur";
    $sql_rocur = "CREATE TABLE $table_name_rocurs (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            tw_handle tinytext NOT NULL,
            description text NOT NULL,
            start_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            slot_duration mediumint(9) NOT NULL,
            slot_start_day mediumint(9) NOT NULL,
            wp_category tinytext NOT NULL,
            PRIMARY KEY  (id)
            ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql_rocur );
}
?>
