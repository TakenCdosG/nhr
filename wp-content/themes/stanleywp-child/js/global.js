( function($) {
    'use strict';
	
$( window ).load( function() {
	//Carousel
	if($('#carousel').length)
	{
		$('#carousel').carouFredSel({
			responsive : true,
            auto: false,
        items:
        {
            width: 200,
            height: '50%',	//	optionally resize item-height
            visible:
                {
                    min: 2,
                    max: 4
                }
        },
        scroll : {
            items:
            {
                width: 780,
                height: '50%',	//	optionally resize item-height
                visible:
                    {
                        min: 2,
                        max: 4
                    }
            },
            easing          : "quadratic",
            duration        : 700
        },
        prev : { 
		      button : "#carousel_prev",
		      key : "left"
		   },

		   next : { 
		      button : "#carousel_next",
		      key : "right"
		   }
		});
	}else{}
} ); // End on window load

$( document ).ready( function() {

// Prettyphoto => for desktops only
		if ( $( window ).width() > 767 ) {
		
			// PrettyPhoto Without gallery
			$( '.wpex-lightbox' ).prettyPhoto( {
				theme              : 'none',
				allow_resize       : true,
				counter_separator_label: ' of ',
				show_title         : false,
				social_tools       : false,
				wmode              : 'opaque',
			} );
		
			//PrettyPhoto With Gallery
			$( "a[rel^='wpexLightboxGallery']" ).prettyPhoto( {
				show_title         : false,
				social_tools       : false,
				autoplay_slideshow : false,
				overlay_gallery    : true,
				wmode              : 'opaque'
			} );
		
		}
} ); // End doc ready
} ) ( jQuery );