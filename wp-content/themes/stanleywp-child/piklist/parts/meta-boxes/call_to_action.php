<?php
/*
Title: Call to Action
Post Type: page
Order: 1
Template: featured
*/
?>

<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'call'
 ,'label' => 'Title'
 ,'description' => 'This is title for the Call to Action section.'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>
<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'callto_subtitle'
 ,'label' => 'Subtitle'
 ,'description' => 'This is the Subtitlte for the Call to Action section.'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>
<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'callto_button'
 ,'label' => 'Button Text'
 ,'description' => 'This is text for the Call to Action Button.'
 ,'value' => 'VIEW ALL AVAILABLE APARTAMENTS'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>
<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'callto_link'
 ,'label' => 'Button URL'
 ,'description' => 'This is the Link for the Call to Action Button.'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>
