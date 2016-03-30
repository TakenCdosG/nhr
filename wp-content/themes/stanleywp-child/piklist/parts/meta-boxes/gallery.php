<?php
/*
Title: Gallery
Post Type: properties
Order: -1
*/
?>

<?php
piklist('field', array(
    'type' => 'file'
,'field' => 'property_gallery'
,'label' => 'Add Image(s)'
,'description' => 'Select multiple images for Gallery'
,'options' => array(
    'modal_title' => 'Add Image(s)'
    ,'button' => 'Add Images'
    )
));
?>