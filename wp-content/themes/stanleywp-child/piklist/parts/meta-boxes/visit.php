<?php
/*
Title: Visit Button
Post Type: page
Order: 1
Template: basic-page
*/
?>
<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'visit_button'
 ,'label' => 'Button Text'
 ,'description' => 'This is text for the Visit Button.'
 ,'value' => 'VISIT'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>

<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'visit_link'
 ,'label' => 'Button Link'
 ,'description' => 'This is the URL for the Visit Button.'
 ,'attributes' => array(
   'class' => 'text'
 )
 ));
?>
