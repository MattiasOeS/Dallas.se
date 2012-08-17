<?php
/**
 * @package Dallas_EpostSignaturPlugin
 */
/*
Plugin Name: Dallas EpostSignatur Plugin
Plugin URI: http://www.dallas.se
Description: För att slumpgenerade epostfooters är cool
Version: x
Author: Nord Interactive
Author URI: http://n-i.se
License: GPLv2 or later

*/
require_once dirname(__FILE__).'/dallas/EpostPlugin/main.php';

$Dallas_EpostSignaturPlugin = new Dallas_EpostPlugin_Main();
add_action('init', array($Dallas_EpostSignaturPlugin, 'init'));
