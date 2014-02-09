<?php

/*
 * @file
 * Provide views data for galli.module.
 */


/**
 *  Implements hook_views_data.
 */

function galli_views_data() {
  $data['galli']['table']['group']= t('Galli entities');

  $data['galli']['table']['base'] = array(
    'field' => 'id',
    'title' => t('Table for galli entities'),
    'help' => t('whatever you are looking for'),
    'weight' => -10,
  );

  $data['galli']['table']['entity type'] = 'galli';

  $data['galli']['gid'] =array(
    'title' => t('gid'),
    'help' => t('The id of dä thing'),
    'field' => array(
      'id' => 'standard',
    ),
  );

  $data['galli']['name'] = array(
    'title' => t('Name of the entity'),
    'help'=> t('text field'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );

  $data['galli']['type'] = array(
    'title' => t('Entity type'),
    'filter' => array(
      'id' => 'string',
    ),
  );
  $data['galli']['person_name'] = array(
    'title' => t('Person Name'),
    'help'=> t('text field'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );
  $data['galli']['person_first_name'] = array(
    'title' => t('Person First Name'),
    'help'=> t('text field'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );
  $data['galli']['person_location'] = array(
    'title' => t('Person Location'),
    'help'=> t('text field'),
    'field' => array(
      'id' => 'standard',
    ),
    'sort' => array(
      'id' => 'standard',
    ),
    'filter' => array(
      'id' => 'string',
    ),
    'argument' => array(
      'id' => 'string',
    ),
  );
  return $data;
}
