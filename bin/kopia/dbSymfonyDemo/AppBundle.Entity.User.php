<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\UserRepository';
$metadata->setPrimaryTable(array(
   'name' => 'symfony_demo_user',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'fieldName' => 'fullName',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'fullName',
  ));
$metadata->mapField(array(
   'fieldName' => 'username',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => true,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'username',
  ));
$metadata->mapField(array(
   'fieldName' => 'email',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => true,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'email',
  ));
$metadata->mapField(array(
   'fieldName' => 'password',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'password',
  ));
$metadata->mapField(array(
   'fieldName' => 'roles',
   'type' => 'json_array',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'roles',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);