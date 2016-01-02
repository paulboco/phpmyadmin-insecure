<?php

$__SECURE = true;
$cfg['blowfish_secret'] = '54E87DC55GDSF5SDDsd545487';

$i = 0;
$i++;

if ($__SECURE) {
    $cfg['Servers'][$i]['auth_type'] = 'cookie';
    $cfg['Servers'][$i]['AllowNoPassword'] = false;
}
else
{
    $cfg['Servers'][$i]['auth_type'] = 'config';
    $cfg['Servers'][$i]['user']      = 'root';
    $cfg['Servers'][$i]['password']  = 'root';
}
