<?php
/**
 * @file
 * Definition of Drupal\galli\Entity\galli.
 */

namespace Drupal\galli\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\FieldDefinition;
use Drupal\Core\Entity\EntityStorageControllerInterface;
use Drupal\Core\Language\Language;

/**
 * Defines the Galli entity class.
 *
 * @EntityType(
 *   id = "galli",
 *   label = @Translation("Entity Galli"),
 *   controllers = {
 *     "storage" = "Drupal\Core\Entity\FieldableDatabaseStorageController",
 *     "view_builder" = "Drupal\galli\GalliViewBuilder",
 *     "form" = {
 *       "default" = "Drupal\galli\GalliFormController",
 *       "edit" = "Drupal\galli\GalliFormController",
 *       "add" = "Drupal\galli\GalliFormController",
 *       "delete" = "Drupal\galli\GalliDeleteForm"
 *     },
 *     "translation" = "Drupal\content_translation\ContentTranslationController"
 *   },
 *   base_table = "galli",
 *   admin_permission = "administer display modes",
 *   fieldable = TRUE,
 *   field_cache = FALSE,
 *   entity_keys = {
 *     "id" = "gid",
 *     "uuid" = "uuid",
 *     "label" = "name"
 *   },
 *   links = {
 *     "canonical" = "galli_person.render",
 *     "edit-form" = "galli_person.edit_entity_test",
 *     "admin-form" = "galli.settings"
 *   }
 * )
 */
class Galli extends ContentEntityBase{

  public function id() {
    return $this->get('gid')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->name->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getPersonName() {
    return $this->person_name->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getPersonFirstName() {
    return $this->person_first_name->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getPersonLocation() {
    return $this->person_location->value;
  }


  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions($entity_type) {
    $fields['gid'] = FieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Galli Person entity.'))
      ->setReadOnly(TRUE);

    $fields['uuid'] = FieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the Galli Person entity.'))
      ->setReadOnly(TRUE);

    $fields['langcode'] = FieldDefinition::create('language')
      ->setLabel(t('Language code'))
      ->setDescription(t('The language code of the Galli Person entity.'));

    $fields['name'] = FieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the Galli Person entity.'))
      ->setTranslatable(TRUE)
      ->setPropertyConstraints('value', array('Length' => array('max' => 32)));

    // @todo: Add allowed values validation.
    $fields['type'] = FieldDefinition::create('string')
      ->setLabel(t('Type'))
      ->setDescription(t('The bundle of the galli entity.'))
      ->setRequired(TRUE);

    $fields['user_id'] = FieldDefinition::create('entity_reference')
      ->setLabel(t('User ID'))
      ->setDescription(t('The ID of the associated user.'))
      ->setSettings(array('target_type' => 'user'))
      ->setTranslatable(TRUE);

    $fields['person_name'] = FieldDefinition::create('string')
      ->setLabel(t('Person Name'))
      ->setDescription(t('The person name of the Galli Person entity.'))
      ->setTranslatable(TRUE)
      ->setPropertyConstraints('value', array('Length' => array('max' => 32)));

    $fields['person_first_name'] = FieldDefinition::create('string')
      ->setLabel(t('Person First Name'))
      ->setDescription(t('The person name of the Galli Person entity.'))
      ->setTranslatable(TRUE)
      ->setPropertyConstraints('value', array('Length' => array('max' => 32)));

    $fields['person_location'] = FieldDefinition::create('string')
      ->setLabel(t('Person Location'))
      ->setDescription(t('The person name of the Galli Person entity.'))
      ->setTranslatable(TRUE)
      ->setPropertyConstraints('value', array('Length' => array('max' => 32)));

    return $fields;
  }

}




