<?php
/*
Title: Apartment Features
Post Type: properties
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
 ,'field' => 'apartment_features'
 ,'label' => 'Apartment Features'
 ,'description' => 'Apartment Features Details'
 ,'options' => array (
     'media_buttons' => false
     ,'teeny' => true
    )
 ));
?>


