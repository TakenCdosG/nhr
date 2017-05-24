<?php
/*
Title: Development Attributes
Post Type: developments
Order: 2
*/
?>

<?php
piklist('field', array(
 'type' => 'editor'
 ,'field' => 'contact_developments'
 ,'label' => 'Contact Information'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>

<?php
piklist('field', array(
 'type' => 'editor'
 ,'field' => 'basic_features_developments'
 ,'label' => 'Features'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>
