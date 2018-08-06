<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\PostRepository';
$metadata->setPrimaryTable(array(
   'name' => 'symfony_demo_post',
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
   'fieldName' => 'title',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'title',
  ));
$metadata->mapField(array(
   'fieldName' => 'slug',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'slug',
  ));
$metadata->mapField(array(
   'fieldName' => 'summary',
   'type' => 'string',
   'scale' => 0,
   'length' => NULL,
   'unique' => false,
   'nullable' => false,
   'precision' => 0,
   'columnName' => 'summary',
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
$metadata->mapOneToMany(array(
   'fieldName' => 'comments',
   'targetEntity' => 'AppBundle\\Entity\\Comment',
   'cascade' => 
   array(
   0 => 'remove',
   ),
   'fetch' => 2,
   'mappedBy' => 'post',
   'orphanRemoval' => true,
   'orderBy' => 
   array(
   'publishedAt' => 'DESC',
   ),
  ));
$metadata->mapManyToMany(array(
   'fieldName' => 'tags',
   'targetEntity' => 'AppBundle\\Entity\\Tag',
   'cascade' => 
   array(
   1 => 'persist',
   ),
   'fetch' => 2,
   'joinTable' => 
   array(
   'name' => 'symfony_demo_post_tag',
   'schema' => NULL,
   'joinColumns' => 
   array(
    0 => 
    array(
    'name' => 'post_id',
    'referencedColumnName' => 'id',
    'onDelete' => 'CASCADE',
    ),
   ),
   'inverseJoinColumns' => 
   array(
    0 => 
    array(
    'name' => 'tag_id',
    'referencedColumnName' => 'id',
    'onDelete' => 'CASCADE',
    ),
   ),
   ),
   'orderBy' => 
   array(
   'name' => 'ASC',
   ),
  ));