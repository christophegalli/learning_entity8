<?php
/**
 * @file
 * Definition of Drupal\galli\GalliFormController.
 */

namespace Drupal\galli;

use Drupal\Core\Entity\ContentEntityFormController;
use Drupal\Core\Language\Language;

/**
 * Form controller for the galli entity edit forms.
 */
class GalliFormController extends ContentEntityFormController {

  /**
   * Overrides Drupal\Core\Entity\EntityFormController::form().
   */
  public function form(array $form, array &$form_state) {
    $form = parent::form($form, $form_state);
    $entity = $this->entity;

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name (entity)'),
      '#default_value' => $entity->name->value,
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#weight' => -10,
    );

    $form['user_id'] = array(
      '#type' => 'textfield',
      '#title' => 'UID',
      '#default_value' => $entity->user_id->target_id,
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
      '#weight' => -10,
    );
    $form['person_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Person Name'),
      '#default_value' => $entity->person_name->value,
      '#size' => 60,
      '#maxlength' => 128,
      '#weight' => -8,
    );
    $form['person_first_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Person First Name'),
      '#default_value' => $entity->person_first_name->value,
      '#size' => 60,
      '#maxlength' => 128,
      '#weight' => -7,
    );
    $form['person_location'] = array(
      '#type' => 'textfield',
      '#title' => t('Person Location'),
      '#default_value' => $entity->person_location->value,
      '#size' => 60,
      '#maxlength' => 128,
      '#weight' => -6,
    );

    $form['langcode'] = array(
      '#title' => t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->getUntranslated()->language()->id,
      '#languages' => Language::STATE_ALL,
    );


    return $form;
  }

  /**
   * Overrides \Drupal\Core\Entity\EntityFormController::submit().
   */
  public function submit(array $form, array &$form_state) {
    // Build the entity object from the submitted values.
    $entity = parent::submit($form, $form_state);
    $form_state['redirect'] = 'galli-entities';

    return $entity;
  }


  /**
   * Overrides Drupal\Core\Entity\EntityFormController::save().
   */
  public function save(array $form, array &$form_state) {
    $entity = $this->entity;
    $entity->save();
  }
}

