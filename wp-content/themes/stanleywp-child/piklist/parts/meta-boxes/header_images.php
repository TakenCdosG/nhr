<?php
    /*
    Title: Header Images
    Post Type: page
    Order: 1
    Collapse: false
    Tab: Add-More's
    Sub Tab: Single Level

    */

    piklist('field', array(
    'type' => 'group'
    ,'field' => 'header_images'
    ,'add_more' => true
    ,'label' => __('Header Images', 'piklist-demo')
    ,'description' => 'This is where you can change/add images to the header, please Add ONLY 1 image per row.'
    ,'fields'  => array(
        array(
            'type' => 'file'
            ,'field' => 'image'
            ,'label' => __('Image, add ONLY 1 per row.', 'piklist-demo')
            ,'columns' => 4
            ,'validate' => array(
                array(
                    'type' => 'limit'
                    ,'options' => array(
                    'min' => 1
                    ,'max' => 1
                    )
                )
            )
        )
        ,array(
            'type' => 'text'
            ,'field' => 'img_texts'
            ,'label' => __('Enter the text for the Image', 'piklist-demo')
            ,'columns' => 12
            ,'add_more' => true
            )
        )
    ));