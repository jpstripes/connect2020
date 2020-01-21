<?php
// Loading JSON file as SSoT between PHP and TypeScript.
define(
  'BLOCKS',
  json_decode(file_get_contents(dirname(__FILE__) . '/blocks.json'), true)
);

include_once dirname(__FILE__) . '/consts.php';
include_once dirname(__FILE__) . '/admin.php';
include_once dirname(__FILE__) . '/blocks.php';
include_once dirname(__FILE__) . '/categories.php';
include_once dirname(__FILE__) . '/post-session.php';
include_once dirname(__FILE__) . '/post-supporter-gold.php';
include_once dirname(__FILE__) . '/post-supporter-operation.php';
include_once dirname(__FILE__) . '/post-supporter-platinum.php';
include_once dirname(__FILE__) . '/post-supporter-silver.php';
include_once dirname(__FILE__) . '/social.php';
