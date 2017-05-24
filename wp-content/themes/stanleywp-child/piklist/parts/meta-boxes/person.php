<?php
/*
Title: Commercial Attributes
Post Type: person
Order: 1
*/
?>

<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'person_name'
 ,'label' => 'Name'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>

<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'person_title'
 ,'label' => 'Title'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>
