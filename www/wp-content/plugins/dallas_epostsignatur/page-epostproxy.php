<?php

if (!isset($Dallas_EpostSignaturPlugin)) {
    wp_die('Dallas_EpostSignaturPlugin must be installed to use this template!');
}
    
header('Location:'.$Dallas_EpostSignaturPlugin->proxy());