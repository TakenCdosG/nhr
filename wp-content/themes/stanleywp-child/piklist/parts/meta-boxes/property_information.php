<?php
/*
Title: Property Information
Post Type: listings
Order: 3
*/
?>
<style>
.sep:after {
	background-color: #BCBCBC;
	content: "";
	display: inline-block;
	height: 1px;
	position: relative;
	vertical-align: middle;
	width: 80%;
	left: 15px;
}
</style>

<?php
piklist('field', array(
 'type' => 'editor'
 ,'field' => 'property_information'
 ,'label' => 'Property Information'
 ,'description' => 'Property Details'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>


