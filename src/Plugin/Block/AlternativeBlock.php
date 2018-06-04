<?php

namespace Drupal\try_console_alternative\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'AlternativeBlock' block.
 *
 * @Block(
 *  id = "alternative_block",
 *  admin_label = @Translation("Alternative block"),
 * )
 */
class AlternativeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['inputtext'] = [
      '#type' => 'text_format',
      '#title' => $this->t('InputText'),
    '#description' => $this->t('Just an input text'),
      '#default_value' => $this->configuration['inputtext'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['inputtext'] = $form_state->getValue('inputtext');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['alternative_block_inputtext']['#markup'] = '<p>' . $this->configuration['inputtext']['value'] . '</p>';

    return $build;
  }

}
