<?php
// Change to true once you've finished setting up your settings
$config_edited = false;
// ===========
/*
 * MySQL connection information
 * */
$mysql = array(
    "address" => "",
    "port" => "",
    "username" => "",
    "password" => "",
    "database" => "",
);
/*
 * Signature storage location
 *    Has to be relative to the config.php file
 * */
$sig_path = "";
/*
 * Recaptcha
 * */
$recaptcha_site_key="";
$recaptcha_secret_key="";
$recaptcha_score_min=0.5;
/*
 * Shoppy API and webhook secret
 * */
$shoppy = array(
    "api-key" => "",
    "webhook-secret" => ""
);