<?php
// Loading JSON file as SSoT between PHP and TypeScript.
define(
  'BLOCKS',
  json_decode(file_get_contents(dirname(__FILE__) . '/blocks.json'), true)
);

include_once dirname(__FILE__) . '/admin.php';
include_once dirname(__FILE__) . '/blocks.php';
include_once dirname(__FILE__) . '/categories.php';
include_once dirname(__FILE__) . '/features.php';
include_once dirname(__FILE__) . '/post-session.php';
