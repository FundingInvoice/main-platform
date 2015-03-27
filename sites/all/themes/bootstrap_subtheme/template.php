<?php

/**
 * @file
 * template.php
 */
function bootstrap_subtheme_form_contact_site_form_alter(&$form, &$form_state) {
  drupal_set_title('Send us a message');
}


function bootstrap_subtheme_theme() {
  return array(
    'invoice_node_form' => array(
      'arguments' => array('form' => NULL),
      'template' => 'templates/invoice-node-form',
      'render element' => 'form'
    ),
  );
}
