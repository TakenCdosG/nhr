<?php
/*
Title: Features
Post Type: listings
Order: 1
*/
?>

<?php
piklist('field', array(
'type' => 'checkbox'
,'field' => 'features'
,'value' => 'option-n' // Sets default to Option 2
,'label' => 'List of Features for this Property'
,'description' => ''
,'attributes' => array(
  'multiple' => 'multiple'
)
,'choices' => array(
     'High Speed Internet Access' => 'High Speed Internet Access'
    ,'Wi-Fi' => 'Wi-Fi'
    ,'Washer/Dryer' => 'Washer/Dryer' 
    ,'Air Conditioning' =>  'Air Conditioning'
    ,'Heating' => 'Heating'
    ,'Ceiling Fans' => 'Ceiling Fans'
    ,'Cable Ready' => 'Cable Ready'
    ,'Alarm' => 'Alarm'
    ,'Tub/Shower' => 'Tub/Shower'
    ,'Handrails' => 'Handrails'
)
));
?>