<?php
/*
Title: Apply Now
Post Type: listings
Order: 5
*/
?>
<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'apply_now_button'
 ,'label' => 'Button Text'
 ,'description' => 'This is text for the Apply Now Button.'
 ,'value' => 'Apply Now'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>
<?php
piklist('field', array(
  'type' => 'file'
  ,'field' => 'apply_now'
  ,'label' => 'Add File'
));

?>
