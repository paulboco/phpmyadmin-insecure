<?php

// Set security key.
$cfg['blowfish_secret'] = '54E87DC55GDSF5SDDsd545487';

// Only the 'local' environment may login insecurely.
if (getenv('APP_ENV') == 'local') {
    $cfg['Servers'][1]['auth_type'] = 'config';
    $cfg['Servers'][1]['user']      = 'homestead';
    $cfg['Servers'][1]['password']  = 'secret';
} else {
    $cfg['Servers'][1]['auth_type'] = 'cookie';
    $cfg['Servers'][1]['AllowNoPassword'] = false;
}
