<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'symfony_demo_comment',
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
   'fieldName' => 'content',
   'type' => 'text',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'content',
  ));
$metadata->mapField(array(
   'fieldName' => 'publishedAt',
   'type' => 'datetime',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'publishedAt',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapOneToOne(array(
   'fieldName' => 'post',
   'targetEntity' => 'AppBundle\\Entity\\Post',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => NULL,
   'inversedBy' => 'comments',
   'joinColumns' => 
   array(
   0 => 
   array(
    'name' => 'post_id',
    'unique' => false,
    'nullable' => false,
    'onDelete' => NULL,
    'columnDefinition' => NULL,
    'referencedColumnName' => 'id',
   ),
   ),
   'orphanRemoval' => false,
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'author',
   'targetEntity' => 'AppBundle\\Entity\\User',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => NULL,
   'inversedBy' => NULL,
   'joinColumns' => 
   array(
   0 => 
   array(
    'name' => 'author_id',
    'unique' => false,
    'nullable' => false,
    'onDelete' => NULL,
    'columnDefinition' => NULL,
    'referencedColumnName' => 'id',
   ),
   ),
   'orphanRemoval' => false,
  ));