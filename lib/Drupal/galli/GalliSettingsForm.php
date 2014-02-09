<?php

namespace Drupal\galli;

use Drupal\Core\Form\FormBase;

class GalliSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'galli_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function submitForm(array &$form, array &$form_state) {
    // TODO: Implement submitForm() method.
  }


  public function buildForm(array $form, array &$form_state) {
    $form['test']['#markup'] = 'Hi';
    return $form;
  }
}
