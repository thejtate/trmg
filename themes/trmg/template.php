<?php

/**
 * @file
 * template.php
 *
 * Contains theme override functions and preprocess functions for the theme.
 */
define('TRMG_WEBFORM_CONTACT_NID', 22);

/**
 * Implements hook_preprocess_html().
 */
function trmg_preprocess_html(&$vars) {
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'user-scalable=yes, width=device-width',
    ),
  );
  $handheldhriendly = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'HandheldFriendly',
      'content' => 'false',
    ),
  );
  //$robots = array(
  //  '#tag' => 'meta',
  //  '#attributes' => array(
  //    'name' => 'robots',
  //    'content' => 'index,follow',
  //  ),
  //);

  // Setup IE meta tag to force IE rendering mode.
  $meta_ie_render_engine = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'X-UA-Compatible',
      'content' => 'IE=edge',
    ),
    '#weight' => '-99999',
    '#prefix' => '<!--[if IE]>',
    '#suffix' => '<![endif]-->',
  );

  drupal_add_html_head($meta_ie_render_engine, 'meta_ie_render_engine');
  drupal_add_html_head($viewport, 'viewport');
  drupal_add_html_head($handheldhriendly, 'handheldhriendly');
  //drupal_add_html_head($robots, 'robots');

  $has_top_image = FALSE;
  if ($node = menu_get_object()) {
    $vars['classes_array'][] = 'page';
    $vars['classes_array'][] = 'page-' . $node->type;

    switch ($node->type) {
      case 'webform':
        $vars['classes_array'][] = 'page-contact';
        break;
      case 'staff':
        $vars['classes_array'][] = 'page-attorney';
        break;
      default :
        break;
    }

    try {
      $node_wrapper = entity_metadata_wrapper('node', $node);
      $properties = $node_wrapper->getPropertyInfo();

      if (array_key_exists('field_iab_type', $properties)) {
        $field_iab_type = $node_wrapper->field_iab_type->value();
        $vars['classes_array'][] = 'page-' . $field_iab_type;
      }

      if (array_key_exists('field_top_image', $properties)) {
        $has_top_image = TRUE;
      }
    }
    catch (EntityMetadataWrapperException $exc) {
      watchdog('trmg_theme', 'See ' . __FUNCTION__ . '() <pre>' . $exc->getTraceAsString() . '</pre>', NULL, WATCHDOG_ERROR);
    }
  }

  $vars['classes_array'][] = !$has_top_image ? 'page-without-top-img' : '';
}

/**
 * Implements hook_preprocess_page().
 */
function trmg_preprocess_page(&$vars, $hook) {
  $main_menu_tree = menu_tree_all_data('main-menu');
  $vars['main_menu_expanded'] = menu_tree_output($main_menu_tree);
//  trmg_get_social_menu($vars);
}

/**
 * Implements hook_preprocess_node().
 */
function trmg_preprocess_node(&$vars) {
  $node = $vars['node'];
  if (!$vars['page']) {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
  }
  switch ($node->type) {
    case 'staff':
      try {
        $node_wrapper = entity_metadata_wrapper('node', $node);
        $properties = $node_wrapper->getPropertyInfo();

        if (array_key_exists('field_staff_img', $properties)) {
          $field_staff_img = $node_wrapper->field_staff_img->value();
          $vars['field_staff_img'] = image_style_url('stuff', $field_staff_img['uri']);
        }
      }
      catch (EntityMetadataWrapperException $exc) {
        watchdog('trmg_theme', 'See ' . __FUNCTION__ . '() <pre>' . $exc->getTraceAsString() . '</pre>', NULL, WATCHDOG_ERROR);
      }
      break;
    case 'inventions_and_branding':
      $items = isset($vars['content']['field_iab_items']['#items']) ?
        $vars['content']['field_iab_items']['#items'] : array();
      $rows = _trmg_rows_from_field_collection($items, array('field_iab_items_title'));
      if ($rows && is_array($rows)) {
        $items = '';
        foreach ($rows as $item) {
          $title = isset($item['field_iab_items_title']) ? trmg_bb2html($item['field_iab_items_title']) : '';
          $items .= '<li><a href="#">'. $title . '</a></li>';
        }
        $vars['item_list'] = '<ul>' . $items . '</ul>';
      }
      break;
  }
}

function trmg_get_social_menu(&$vars, $title = '') {
  if (isset($vars)) {
    $social = array('facebook', 'twitter', 'instagram', 'youtube');
    $social_items = array(
      'items' => array(),
      'title' => '',
      'type' => 'ul',
      'attributes' => array(),
    );
    foreach ($social as $key => $value) {
      $social_link = variable_get($value, '');
      if (!empty($social_link)) {
        $social_items['items'][] = array(
          'data' => l('', $social_link, array('attributes' => array('target' => '_blank'))),
          'class' => array('social-' . ($key + 1)),
        );
      }
    }
    if (!empty($social_items['items'])) {
      $vars['social'] = !empty($title) ? '<h2>' . $title . '</h2>' : '';
      $vars['social'] .= theme('item_list', $social_items);
    }
  }
}

/**
 * Implements hook_preprocess_views_view().
 */
function trmg_preprocess_views_view(&$vars) {
  if ($vars['view']->name == 'staff' && $vars['view']->current_display == 'block' &&
    drupal_is_front_page()) {
    $vars['title'] = t('Foundation of experience');
  }
}

/**
 * Implements hook_preprocess_views_view_unformatted().
 */
function trmg_preprocess_views_view_unformatted(&$vars) {
  if ($vars['view']->name == 'staff') {
    if ($vars['view']->current_display === 'block') {
//      $vars['classes_array'][] = 'elements-wrapper';
    }
  }
}

/**
 * Implements template_preprocess_field().
 */
function trmg_preprocess_field(&$vars) {
  $element = $vars['element'];
  switch ($element['#field_name']) {
    case 'field_top_text':
      $vars['classes_array'][] = 'desc';
      break;
    case 'field_iab_items_title':
      if (isset($vars['items'][0]['#markup'])) {
        $vars['items'][0]['#markup'] = trmg_bb2html($vars['items'][0]['#markup']);
      }
      break;
  }
}

/**
 * Implements hook_form_alter().
 */
function trmg_form_alter(&$form, &$form_state, $form_id) {
  $form['#attributes']['class'][] = 'form';
  switch ($form_id) {
    case 'webform_client_form_' . TRMG_WEBFORM_CONTACT_NID:
      $form['#attributes']['class'][] = 'formValidate';
      $form['#attributes']['class'][] = 'form-request-information ';
      break;
  }
}

/**
 * Implements hook_preprocess_block().
 */
function trmg_preprocess_block(&$vars) {
  $delta = isset($vars['block']->delta) ? $vars['block']->delta : '';

  switch ($delta) {
    case 'client-block-22':
      if ($node = menu_get_object()) {
        switch ($node->type) {
          case 'inventions_and_branding':
            $vars['request_info_block_class'] = 'color-a';
            break;
          default :
            $vars['request_info_block_class'] = 'color-b';
            break;
        }
      }
      break;
  }
}


/**
 * Creates a simple text rows array from a field collections, to be used in a
 * field_preprocess function.
 *
 * @param $items
 * @param $field_array
 * @return array
 */
function _trmg_rows_from_field_collection($items, $field_array) {
  $rows = array();
  foreach($items as $key => $item) {
    $entity_id = $item['value'];

    try {
      $entity = field_collection_item_load($entity_id);
      $wrapper = entity_metadata_wrapper('field_collection_item', $entity);
      $row = array();
      foreach($field_array as $field){
        $row[$field] = $wrapper->$field->value();
      }
      $rows[] = $row;
    }
    catch (EntityMetadataWrapperException $exc) {
      watchdog('trmg_theme', 'See ' . __FUNCTION__ . '() <pre>' . $exc->getTraceAsString() . '</pre>', NULL, WATCHDOG_ERROR);
    }
  }

  return $rows;
}

/**
 * Implements hook_menu_alter().
 */
function trmg_menu_alter(&$items) {
  $items['user/register']['access callback'] = FALSE;
  $items['user/password']['access callback'] = FALSE;
}

/**
 * Converts [span] to html <span>.
 *
 * @param $text
 * @return mixed
 */
function trmg_bb2html($text) {
  $bbcode = array(
    "[span]", "[/span]",
  );
  $htmlcode = array(
    "<span>", "</span>",
  );
  return str_replace($bbcode, $htmlcode, $text);
}
