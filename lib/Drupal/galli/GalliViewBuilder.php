<?php

/**
 * @file
 * Contains \Drupal\galli\GalliViewBuilder.
 */

namespace Drupal\galli;

use Drupal\Core\Entity\EntityViewBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityViewBuilderInterface;
/**
 * Defines an entity view builder for a galli entity.
 *
 * @see \Drupal\galli
 */
class GalliViewBuilder extends EntityViewBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildContent(array $entities, array $displays, $view_mode, $langcode = NULL) {
    parent::buildContent($entities, $displays, $view_mode, $langcode);

    foreach ($entities as $entity) {
       $entity->content['galli']['name'] = array(
        '#markup' => $entity->getName(),
        '#prefix' => '<div>',
        '#suffix' => '</div>',
      );
      $entity->content['galli']['person_name'] = array(
        '#markup' => $entity->getPersonName(),
        '#prefix' => '<div>',
        '#suffix' => '</div>',
      );
      $entity->content['galli']['person_first_name'] = array(
        '#markup' => $entity->getPersonFirstName(),
        '#prefix' => '<div>',
        '#suffix' => '</div>',
      );
      $entity->content['galli']['person_location'] = array(
        '#markup' => $entity->getPersonLocation(),
        '#prefix' => '<div>',
        '#suffix' => '</div>',
      );

    }
  }

}
