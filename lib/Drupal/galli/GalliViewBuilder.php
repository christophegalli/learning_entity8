<?php

/**
 * @file
 * Contains \Drupal\galli\GalliViewBuilder.
 */

namespace Drupal\galli;

use Drupal\Core\Entity\EntityViewBuilder;

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
      $entity->content['label'] = array(
        '#markup' => check_plain($entity->label()),
      );
      $entity->content['separator'] = array(
        '#markup' => ' | ',
      );
      $entity->content['view_mode'] = array(
        '#markup' => check_plain($view_mode),
      );
      $entity->content['test'] = array(
        '#markup' => 'Guten Tag',
      );
    }

  }

}
