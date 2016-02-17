<?php

// Set to true for secure login
$__SECURE = isset($_SERVER['APP_ENV']) && $_SERVER['APP_ENV'] == 'production';

$cfg['blowfish_secret'] = '54E87DC55GDSF5SDDsd545487';

if ($__SECURE) {
    $cfg['Servers'][1]['auth_type'] = 'cookie';
    $cfg['Servers'][1]['AllowNoPassword'] = false;
} else {
    $cfg['Servers'][1]['auth_type'] = 'config';
    $cfg['Servers'][1]['user']      = 'homestead';
    $cfg['Servers'][1]['password']  = 'secret';
}
