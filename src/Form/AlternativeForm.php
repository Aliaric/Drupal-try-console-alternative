<?php

namespace Drupal\try_console_alternative\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AlternativeForm.
 */
class AlternativeForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'alternative_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['inputname'] = [
      '#type' => 'text_format',
      '#title' => $this->t('InputName'),
      '#description' => $this->t('Just a text input'),
    ];
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email'),
      '#description' => $this->t('Just an email input'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
