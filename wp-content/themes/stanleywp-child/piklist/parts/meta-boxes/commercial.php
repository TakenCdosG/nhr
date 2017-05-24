<?php
/*
Title: Commercial Attributes
Post Type: commercial
Order: 2
*/
?>

<?php
piklist('field', array(
 'type' => 'editor'
 ,'field' => 'commercial_links'
 ,'label' => 'Links'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>

<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'commercial_button'
 ,'label' => 'Button Text'
 ,'value' => ''
 ,'description' => 'This is text URL for the Button.'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>

<?php
piklist('field', array(
 'type' => 'checkbox'
 ,'field' => 'commercial_leased'
 ,'label' => 'Leased?'
 ,'value' => '0'
 ,'attributes' => array(
   'class' => 'text'
 ),
 'columns' => 6,
 'choices' => array(
 	'1' => 'Enable'
 )
 ));
?>

