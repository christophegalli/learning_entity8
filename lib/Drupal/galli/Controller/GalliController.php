<?php
/**
 * Created by PhpStorm.
 * User: 29
 * Date: 25.01.14
 * Time: 15:54
 */

namespace Drupal\galli\Controller;

use Drupal\Core\Controller\ControllerBase;

class GalliController {

  public function respond() {
    $all_entities = \Drupal::entityManager()->getDefinition('galli');
    $labels = \Drupal::entityManager()->getEntityTypeLabels();
    debug($labels);
    return 'gotcha';
  }

  public function machMal() {


    $trial_entity = \Drupal::entityManager()
      ->getStorageController('galli')
      ->create(array(
      'name' => 'Trial Name route 2',
      'type' => 'galli',
      'person_name' => 'Trial Person Name via Storage',
      'person_first_name' => 'Trial Person First Name',
      'person_location' => 'Trial Person Location',
    ));

    $storage = \Drupal::entityManager()
      ->getStorageController('galli');
    $storage->save($trial_entity);

  //$trial_entity->save();
    $my_entities = entity_load_multiple('galli');
    return 'Count: ' . count($my_entities);
  }

} 