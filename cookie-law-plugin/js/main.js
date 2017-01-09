$ = jQuery;
$( document ).ready( function() {

    $('input[type=submit]').on('click', function(e){
        e.preventDefault();


        var data = {
            'action': 'cookie_law_ajax',
            'text_to_display': $('input[name="display_text"]').val(),
        };

        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.post(ajaxurl, data, function(response) {

            alert('Got this from the server: ' + response);
        });

    });



});