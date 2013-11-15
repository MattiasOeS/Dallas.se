<?php

/**
 * @package Dallas
 * @subpackage Default_Theme
 */
/*
Template Name: Epostimage
*/

if (!isset($Dallas_EpostSignaturPlugin)) {
    wp_die('Dallas_EpostSignaturPlugin must be installed to use this template!');
}

$img = $Dallas_EpostSignaturPlugin->randomImage();