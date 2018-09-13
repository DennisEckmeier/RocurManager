<?php
function detrm_curator_admin_page_html()
{
    // check user capabilities
    if (!current_user_can('read')) {
        return;
    }
/*
   $role_object = get_role( 'administrator' );
   if( !$role_object->has_cap( 'read' )){
               print('nope');
           }
   if( $role_object->has_cap( 'read' )){
                       print('yup');
                   }
*/
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS inclusion doesn't work: -->
    <link rel="stylesheet" type="text/css" href="<?= plugin_dir_path(__FILE__) . 'css\admin.css'; ?>">
    <div class="wrap">
    <h1><?= esc_html(get_admin_page_title()); ?></h1>
            <?php
            if(current_user_can('read')){
                include_once(plugin_dir_path(__FILE__) . '\detrm_rocur_form_template.php');
            }
            include_once(plugin_dir_path(__FILE__) . '\detrm_curator_form_template.php');
            submit_button('Save Settings');
            ?>
    </div>
    <?php
}

detrm_curator_admin_page_html();
?>
