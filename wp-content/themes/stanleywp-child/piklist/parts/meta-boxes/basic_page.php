<?php
/*
Title: Basic Page Attributes
Post Type: page
Template: basic-page
Order: 2
*/
?>

<?php
piklist('field', array(
 'type' => 'editor'
 ,'field' => 'contact'
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
 ,'field' => 'basic_features'
 ,'label' => 'Features'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>

<?php
piklist('field', array(
  'type' => 'file'
  ,'field' => 'basic_image_img'
  ,'label' => 'Page Image'
));

?>
