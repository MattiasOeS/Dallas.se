<?php

$fields = Dallas_EpostPlugin_Meta::getFields();

require_once dirname(__FILE__).'/instruction.php';

echo '<input type="hidden" name="Dallas_EpostPlugin_Meta_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

foreach ($fields as $field) {
    
    $meta = get_post_meta($post->ID, $field['id'], true);
    
    echo "<label>" . $field['name'] . "</label>";
    
    switch ($field['type']) {
        case 'text':
            echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
            break;
        case 'textarea':
            echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
            break;
        case 'select':
            echo '<select name="', $field['id'], '" id="', $field['id'], '">';
            foreach ($field['options'] as $option) {
                echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
            }
            echo '</select>';
            break;
        case 'radio':
            foreach ($field['options'] as $option) {
                echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
            }
            break;
        case 'checkbox':
            echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
            break;
    }
}