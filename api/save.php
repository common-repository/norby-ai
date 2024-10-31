<?php

function norby_sanitize( $value, $filter ) {
    return wp_unslash( filter_var( trim( $value ), $filter ) );
}

function norby_sanitize_string( $value ) {
    return sanitize_text_field( norby_sanitize( $value, FILTER_SANITIZE_STRING ) );
}

function norby_sanitize_hex( $value ) {
    return sanitize_hex_color( norby_sanitize_string( $value ) );
}

function norby_sanitize_boolean( $value ) {
    return (bool) norby_sanitize( $value, FILTER_VALIDATE_BOOLEAN );
}

function norby_sanitize_integer( $value ) {
    return (int) norby_sanitize( $value, FILTER_SANITIZE_NUMBER_INT );
}

function norby_apply_settings_ajax()
{
    try {
        $apiKey = norby_sanitize_string( $_POST[NORBY_OPTION_API_KEY] );
        $language = norby_sanitize_string( $_POST[NORBY_OPTION_LANGUAGE] );
        $color = norby_sanitize_hex( $_POST[NORBY_OPTION_COLOR] );
        $iconColor = norby_sanitize_hex( $_POST[NORBY_OPTION_ICON_COLOR] );
        $botName = norby_sanitize_string( $_POST[NORBY_OPTION_BOT_NAME] );
        $multiChat = norby_sanitize_boolean( $_POST[NORBY_OPTION_MULTI_CHAT] );
        $imageTransfer = norby_sanitize_boolean( $_POST[NORBY_OPTION_IMAGE_TRANSFER] );
        $infoPage = norby_sanitize_boolean( $_POST[NORBY_OPTION_INFO_PAGE] );
        $position = norby_sanitize_string( $_POST[NORBY_OPTION_WIDGET_POSITION] );
        $desktopSideMargin = norby_sanitize_integer( $_POST[NORBY_OPTION_DESKTOP_SIDE_MARGIN] );
        $desktopBottomMargin = norby_sanitize_integer( $_POST[NORBY_OPTION_DESKTOP_BOTTOM_MARGIN] );
        $mobileSideMargin = norby_sanitize_integer( $_POST[NORBY_OPTION_MOBILE_SIDE_MARGIN] );
        $mobileBottomMargin = norby_sanitize_integer( $_POST[NORBY_OPTION_MOBILE_BOTTOM_MARGIN] );

        if ( in_array( $language, array_keys( NORBY_ALLOWED_LANGUAGES ) ) ) {
            update_option( NORBY_OPTION_LANGUAGE, $language );
        }

        if (in_array( $position, array_keys( NORBY_ALLOWED_POSITIONS ) ) ) {
            update_option( NORBY_OPTION_WIDGET_POSITION, $position );
        }

        update_option( NORBY_OPTION_API_KEY, $apiKey );
        update_option( NORBY_OPTION_COLOR, $color );
        update_option( NORBY_OPTION_ICON_COLOR, $iconColor );
        update_option( NORBY_OPTION_BOT_NAME, $botName );
        update_option( NORBY_OPTION_MULTI_CHAT, $multiChat );
        update_option( NORBY_OPTION_IMAGE_TRANSFER, $imageTransfer );
        update_option( NORBY_OPTION_INFO_PAGE, $infoPage );
        update_option( NORBY_OPTION_DESKTOP_SIDE_MARGIN, $desktopSideMargin );
        update_option( NORBY_OPTION_DESKTOP_BOTTOM_MARGIN, $desktopBottomMargin );
        update_option( NORBY_OPTION_MOBILE_SIDE_MARGIN, $mobileSideMargin );
        update_option( NORBY_OPTION_MOBILE_BOTTOM_MARGIN, $mobileBottomMargin );

        wp_send_json_success( 'Settings are saved successfully' );
    } catch (Throwable $throwable) {
        wp_send_json_error(
            "Error saving settings",
            WP_Http::BAD_REQUEST
        );
    }

    wp_die();
}
add_action( 'wp_ajax_norby_apply_settings', 'norby_apply_settings_ajax' );
