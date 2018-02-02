#!/usr/bin/env php
<?php

# 1. Load settings
# 2. Find and replace settings

require __DIR__.'/vendor/autoload.php';

define('PT_FILE', __DIR__.'/ProfitTrailer/application.properties');
define('PTF_FILE', __DIR__.'/Feeder/config/hostsettings.json');

$lines = (new Dotenv\Dotenv(__DIR__))->load();
$pt_settings = [];
$ptf_settings = [];

foreach ($lines as $line) {
    list($name, $value) = array_map('trim', explode('=', $line, 2));
    if (! ctype_upper($line[0])) {
        $pt_settings["/".$name."(.*)/"] = $name.' = '.$value;
    } else {
        data_set($ptf_settings, $name, trim($value, '"'));
    }
}

if (file_exists(PTF_FILE)) {
    $data = json_encode(array_replace_recursive(json_decode(file_get_contents(PTF_FILE), true), $ptf_settings), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    $data = preg_replace('/^(  +?)\\1(?=[^ ])/m', '$1', $data);
    file_put_contents(PTF_FILE, $data);
}

if (file_exists(PT_FILE)) {
    file_put_contents(PT_FILE, preg_replace(array_keys($pt_settings), array_values($pt_settings), file_get_contents(PT_FILE)));
}
