<?php

namespace Drupal\add_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a ‘AddformBlock’ block.
 *
 * @Block(
 * id = "add_form_block",
 * admin_label = @Translation("AddForm block"),
 * )
 */
class AddformBlock extends BlockBase {
 /**
 * {@inheritdoc}
 */
 public function build() {
  $build = [];
  $build['mydata_block']['#markup'] = 'Implement AddformBlock.';
  $form = \Drupal::formBuilder()->getForm('Drupal\mydata\Form\AddformForm');
 return $form;
 }
}