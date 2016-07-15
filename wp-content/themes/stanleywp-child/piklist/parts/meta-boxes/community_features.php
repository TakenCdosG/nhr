<?php
/*
Title: Community Features
Post Type: properties
Order: 4
*/
?>

<?php
piklist('field', array(
 'type' => 'text'
 ,'field' => 'community_features_title'
 ,'label' => 'Title'
 ,'description' => 'Leave blank for "Community Features" text'
 ));

piklist('field', array(
 'type' => 'editor'
 ,'field' => 'community_features'
 ,'label' => 'Community Features'
 ,'description' => 'Community Features Details'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>


