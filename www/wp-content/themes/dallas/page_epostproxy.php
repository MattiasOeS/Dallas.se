<?php
/**
 * @package Dallas
 * @subpackage Default_Theme
 */
/*
Template Name: Epostproxy
*/

if (!isset($Dallas_EpostSignaturPlugin)) {
    wp_die('Dallas_EpostSignaturPlugin must be installed to use this template!');
}
header('Location:'.$Dallas_EpostSignaturPlugin->proxy());