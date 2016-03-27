<?php
/*
Title: Services
Post Type: listings
Order: 2
*/
?>

<?php
piklist('field', array(
'type' => 'checkbox'
,'field' => 'services'
,'value' => 'option-n' // Sets default to Option 2
,'label' => 'List of Services for this Property'
,'description' => ''
,'attributes' => array(
  'multiple' => 'multiple'
)
,'choices' => array(
 'Community-Wide WiFi' =>  'Community-Wide WiFi'
,'Controlled Access' => 'Controlled Access'
,'Security System' => 'Security System'
,'Bilingual' => 'Bilingual'
,'Video Patrol' => 'Video Patrol'
,'24 Hour Availability' => '24 Hour Availability'
,'Furnished Units Available' => 'Furnished Units Available'
,'On-Site Retail' => 'On-Site Retail'
,'Dry Cleaning Service' => 'Dry Cleaning Service'
, 'Parking Security' => 'Parking Security'
)
));
?>


