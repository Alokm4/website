(function($){
"use strict";

	//plugin setting menu links function
    $('.menu-wrapp ul li:first-child').addClass('active');
	$('body').on('click','.menu-wrapp ul li',function(){
		var uID = $(this).attr('data-id');

		$('.menu-wrapp ul li').removeClass('active');
		$(this).addClass('active');

		$('.setting-display-wrapper .cww-admin').hide();
		$('.setting-display-wrapper .'+uID).show();

	});

    $('.color-input-selector').wpColorPicker();

    $('body').on('click','.sff-notice i', function(){
        $('.sff-notice').slideToggle();
    });



    sfFormsCopySettings();

    function sfFormsCopySettings() {
        var copyBtn = $('.copy-btn');
        copyBtn.on('click', function(event) {
            var content = $('.copy-content').text();
           
            try {
                navigator.clipboard.writeText(content);
                $(this).addClass('success');
                $(this).text('Copied');
                setTimeout(function() {
                    $('.copy-btn').removeClass('success');
                    $('.copy-btn').text('Click To Copy');
                }, 1000);

            }catch(err){

            } 
        });
      }

      /**
       * RGBA Color Picker
       */
       $(".color-input-spectrum").spectrum({

       });


       /**
        * Setting Groups Toggle
        * 
        */
       $('.setting-toggle-container-wrapp').hide();
       $('body').on('click','h2.setting-group-title', function(){
            $(this).next('.setting-toggle-container-wrapp').slideToggle();
            $(this).children('span').toggleClass('active');
       });

       
       $( document ).on( 'click', '.notice-upgrade-sffp', function () {
            var type = $( this ).data( 'notice' );
            
            // Make an AJAX call
            // Since WP 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
            $.ajax( ajaxurl,
            {
                type: 'POST',
                data: {
                action: 'plugin_ajax_notice_handler',
                type: type,
                security: sticky_floating_forms.ajax_nonce,
                }
            } );
      } );



})(jQuery);