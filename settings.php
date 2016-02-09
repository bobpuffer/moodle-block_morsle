<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_morsle/google_admin', get_string('admin_account', 'block_morsle'),
                    get_string('admin_account_info', 'block_morsle'), '', PARAM_EMAIL, 50));
}


