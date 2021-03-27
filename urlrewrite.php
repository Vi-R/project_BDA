<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/ru/technologies/(.*)/.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/ru/technologies/detail.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/technologies/(.*)/.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/technologies/detail.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/ru/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/ru/projects/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/projects/index.php',
    'SORT' => 100,
  ),
  24 => 
  array (
    'CONDITION' => '#^/ru/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/ru/news/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  25 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:form.result.new',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
