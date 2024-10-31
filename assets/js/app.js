jQuery( document ).ready( function ( $ ) {
    const notice = $( '.notice' );
    const showSuccessNotice = function ( response ) {
        notice.addClass( 'notice-success' );
        notice.find( '.notice-text' ).html( response.data );
        notice.show();
    };

    const showErrorNotice = function ( response ) {
        notice.addClass( 'notice-error' );
        notice.find( '.notice-text' ).html( response.responseJSON.data );
        notice.show();
    };

    $( '.save-settings' ).click( function ( e ) {
        e.preventDefault();

        $.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            data: {
                action: 'norby_apply_settings',
                norby_api_key: $( '#norby-api-key' ).val(),
                norby_locale: $( '#norby-language' ).val(),
                norby_color: $( '#norby-widget-color' ).val(),
                norby_icon_color: $( '#norby-icon-color' ).val(),
                norby_bot_name: $( '#norby-bot-name' ).val(),
                norby_multi_chat: $( '#norby-multi-chat-enable' ).is( ':checked' ),
                norby_image_transfer: $( '#norby-image-transfer-enable' ).is( ':checked' ),
                norby_information_page: $( '#norby-info-page-enable' ).is( ':checked' ),
                norby_side: $( '#norby-widget-position' ).val(),
                norby_margin_side_desktop: $( '#norby-desktop-side-margin' ).val(),
                norby_margin_bottom_desktop: $( '#norby-desktop-bottom-margin' ).val(),
                norby_margin_side_mobile: $( '#norby-mobile-side-margin' ).val(),
                norby_margin_bottom_mobile: $( '#norby-mobile-bottom-margin' ).val(),
            },
            success: function ( response ) {
                showSuccessNotice( response );
            },
            error: function ( response ) {
                showErrorNotice( response );
            },
            complete: function () {
                window.scrollTo( 0, 0 );
            }
        } );
    } );
} );
