<script>
    (function (w, d, s, o, f, js, fjs) {
        w[o] = w[o] || function () {
            (w[o].q = w[o].q || []).push(arguments)
        };
        js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
        js.id = o; js.src = f; js.async = 1;
        fjs.parentNode.insertBefore(js, fjs);
    }(window, document, 'script', 'nw', '<?php echo esc_url( NORBY_WIDGET_URL ); ?>'));
    nw('init', {
        // Service parameters (do not change it)
        apiKey: '<?php echo esc_attr( get_option(NORBY_OPTION_API_KEY, NORBY_DEFAULT_API_KEY) ); ?>',
        serviceBaseUrl: '<?php echo esc_url( NORBY_API_URL ); ?>',
        // UI customizations
        lang: '<?php echo esc_attr( get_option(NORBY_OPTION_LANGUAGE, NORBY_DEFAULT_LANGUAGE) ); ?>',
        mainColor: '<?php echo esc_attr( get_option(NORBY_OPTION_COLOR, NORBY_DEFAULT_COLOR) ); ?>',
        popupBotAvatarColor: '<?php echo esc_attr( get_option(NORBY_OPTION_ICON_COLOR, NORBY_DEFAULT_ICON_COLOR) ); ?>',
        multichat: '<?php echo esc_attr( get_option(NORBY_OPTION_MULTI_CHAT, NORBY_DEFAULT_MULTI_CHAT) ); ?>',
        botName: '<?php echo esc_attr( get_option(NORBY_OPTION_BOT_NAME, NORBY_DEFAULT_BOT_NAME) ); ?>',
        imageTransferEnabled: '<?php echo esc_attr( get_option(NORBY_OPTION_IMAGE_TRANSFER, NORBY_DEFAULT_IMAGE_TRANSFER) ); ?>',
        informationPage: '<?php echo esc_attr( get_option(NORBY_OPTION_INFO_PAGE, NORBY_DEFAULT_INFO_PAGE) ); ?>',
        // Positioning parameters
        side: '<?php echo esc_attr( get_option(NORBY_OPTION_WIDGET_POSITION, NORBY_DEFAULT_WIDGET_POSITION) ); ?>',
        marginSideDesktop: '<?php echo esc_attr( get_option(NORBY_OPTION_DESKTOP_SIDE_MARGIN, NORBY_DEFAULT_DESKTOP_SIDE_MARGIN) ); ?>',
        marginBottomDesktop: '<?php echo esc_attr( get_option(NORBY_OPTION_DESKTOP_BOTTOM_MARGIN, NORBY_DEFAULT_DESKTOP_BOTTOM_MARGIN) ); ?>',
        marginSideMobile: '<?php echo esc_attr( get_option(NORBY_OPTION_MOBILE_SIDE_MARGIN, NORBY_DEFAULT_MOBILE_SIDE_MARGIN) ); ?>',
        marginBottomMobile: '<?php echo esc_attr( get_option(NORBY_OPTION_MOBILE_BOTTOM_MARGIN, NORBY_DEFAULT_MOBILE_BOTTOM_MARGIN) ); ?>',
    });
</script>
