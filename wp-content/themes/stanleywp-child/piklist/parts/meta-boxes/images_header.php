<?php
/*
Title: Images Header
Order: 0
*/
?>
<?php
piklist('field', array(
    'type' => 'file'
,'field' => 'upload_media'
,'scope' => 'post_meta'
,'label' => 'Add File(s)'
,'description' => 'This is the uploader seen in the admin by default.'
,'options' => array(
    'modal_title' => 'Add File(s)'
    ,'button' => 'Add'
    )
));