<div class="norby-layout">
    <div class="notice is-dismissible hidden">
        <h4 class="notice-text"></h4>
    </div>

    <div class="norby-form">
        <form class="norby-column" name="norby" method="post">
            <h1 class="norby-form-header">Set Up Norby Chat</h1>
            <p class="norby-form-caption">The settings below will be applied to the code you’ll get in the next step</p>

            <ul>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-api-key">API key:</label>
                    <input type="text"
                           id="norby-api-key"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_API_KEY ) ); ?>"
                           placeholder="Widget API key" />
                    <div class="norby-api-key-caption">
                        Need an API key? <a href="<?php echo esc_url( NORBY_SIGNUP_URL ); ?>" target="_blank" rel="noopener noreferrer">
                            Sign up for free on norby.io
                        </a>
                    </div>
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-language">Language:</label>
                    <select id="norby-language"
                            class="norby-input"
                            value="<?php echo esc_attr( get_option( NORBY_OPTION_LANGUAGE ) ); ?>">
                        <option value="">Select</option>

                        <?php foreach( NORBY_ALLOWED_LANGUAGES as $value => $name ) : ?>
                            <?php $isSelected = $value === get_option( NORBY_OPTION_LANGUAGE ) ? 'selected="selected"' : ''; ?>
                            <option value="<?php echo esc_attr( $value ); ?>" <?php echo esc_attr( $isSelected ); ?>>
                                <?php echo esc_attr( $name ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-widget-color">Widget color:</label>
                    <input type="text"
                           id="norby-widget-color"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_COLOR ) ); ?>"
                           placeholder="Widget main color" />
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-icon-color">Pop-up icon color:</label>
                    <input type="text"
                           id="norby-icon-color"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_ICON_COLOR ) ); ?>"
                           placeholder="Pop-up icon color" />
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-bot-name">Bot name:</label>
                    <input type="text"
                           id="norby-bot-name"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_BOT_NAME ) ); ?>"
                           placeholder="Bot name" />
                </li>
                <li class="norby-list-item">
                    <fieldset>
                        <legend class="norby-label">Multi chat:</legend>
                        <div class="norby-radio-input">
                            <input type="radio"
                                   id="norby-multi-chat-enable"
                                   name="norby-multi-chat"
                                   value="true"
                                <?php echo esc_attr( get_option( NORBY_OPTION_MULTI_CHAT ) ) ? 'checked="checked"' : ''; ?> />
                            <label class="norby-label" for="norby-multi-chat-enable">Enable</label>
                        </div>
                        <div class="norby-radio-input">
                            <input type="radio"
                                   id="norby-multi-chat-disable"
                                   name="norby-multi-chat"
                                   value="false"
                                <?php echo !esc_attr( get_option( NORBY_OPTION_MULTI_CHAT ) ) ? 'checked="checked"' : ''; ?> />
                            <label class="norby-label" for="norby-multi-chat-disable">Disable</label>
                        </div>
                    </fieldset>
                </li>
                <li class="norby-list-item">
                    <fieldset>
                        <legend class="norby-label">Image transfer:</legend>
                        <div class="norby-radio-input">
                            <input type="radio"
                                   id="norby-image-transfer-enable"
                                   name="norby-image-transfer"
                                   value="true"
                                <?php echo esc_attr( get_option( NORBY_OPTION_IMAGE_TRANSFER ) ) ? 'checked="checked"' : ''; ?> />
                            <label class="norby-label" for="norby-image-transfer-enable">Enable</label>
                        </div>
                        <div class="norby-radio-input">
                            <input type="radio"
                                   id="norby-image-transfer-disable"
                                   name="norby-image-transfer"
                                   value="false"
                                <?php echo !esc_attr( get_option( NORBY_OPTION_IMAGE_TRANSFER ) ) ? 'checked="checked"' : ''; ?> />
                            <label class="norby-label" for="norby-image-transfer-disable">Disable</label>
                        </div>
                    </fieldset>
                </li>
                <li class="norby-list-item">
                    <fieldset>
                        <legend class="norby-label">Info page:</legend>
                        <div class="norby-radio-input">
                            <input type="radio"
                                   id="norby-info-page-enable"
                                   name="norby-info-page"
                                   value="true"
                                <?php echo esc_attr( get_option( NORBY_OPTION_INFO_PAGE ) ) ? 'checked="checked"' : ''; ?> />
                            <label class="norby-label" for="norby-info-page-enable">Enable</label>
                        </div>
                        <div class="norby-radio-input">
                            <input type="radio"
                                   id="norby-info-page-disable"
                                   name="norby-info-page"
                                   value="false"
                                <?php echo !esc_attr( get_option( NORBY_OPTION_INFO_PAGE ) ) ? 'checked="checked"' : ''; ?> />
                            <label class="norby-label" for="norby-info-page-disable">Disable</label>
                        </div>
                    </fieldset>
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-widget-position">Widget position:</label>
                    <select id="norby-widget-position"
                            class="norby-input"
                            value="<?php echo esc_attr( get_option( NORBY_OPTION_WIDGET_POSITION ) ); ?>">
                        <option value="">Select</option>
                        <?php foreach( NORBY_ALLOWED_POSITIONS as $value => $name ) : ?>
                            <?php $isSelected = $value === get_option( NORBY_OPTION_WIDGET_POSITION ) ? 'selected="selected"' : ''; ?>
                            <option value="<?php echo esc_attr( $value ); ?>" <?php echo esc_attr( $isSelected ); ?>>
                                <?php echo esc_attr( $name ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-desktop-side-margin">Desktop side margin:</label>
                    <input type="text"
                           id="norby-desktop-side-margin"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_DESKTOP_SIDE_MARGIN ) ); ?>"
                           placeholder="Desktop side margin" />
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-desktop-bottom-margin">Desktop bottom margin:</label>
                    <input type="text"
                           id="norby-desktop-bottom-margin"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_DESKTOP_BOTTOM_MARGIN ) ); ?>"
                           placeholder="Desktop bottom margin" />
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-mobile-side-margin">Mobile side margin:</label>
                    <input type="text"
                           id="norby-mobile-side-margin"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_MOBILE_SIDE_MARGIN ) ); ?>"
                           placeholder="Mobile side margin" />
                </li>
                <li class="norby-list-item">
                    <label class="norby-label" for="norby-mobile-bottom-margin">Mobile bottom margin:</label>
                    <input type="text"
                           id="norby-mobile-bottom-margin"
                           class="norby-input"
                           value="<?php echo esc_attr( get_option( NORBY_OPTION_MOBILE_BOTTOM_MARGIN ) ); ?>"
                           placeholder="Mobile bottom margin" />
                </li>
            </ul>

            <button class="norby-button save-settings">Save Settings</button>
        </form>
    </div>
</div>
