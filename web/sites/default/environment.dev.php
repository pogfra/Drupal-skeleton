<?php

# Show all errors
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

# Enable development services
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

# Performance
$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['cache']['page']['use_internal'] = FALSE;
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['css']['gzip'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$config['system.performance']['js']['gzip'] = FALSE;
$config['system.performance']['response']['gzip'] = FALSE;

$config['system.file']['temporary_maximum_age'] = 604800;

# Disable cache
$cache_bins = array('bootstrap', 'page', 'config','data','default','discovery','dynamic_page_cache','entity','menu','migrate','render','rest','static','toolbar');
foreach ($cache_bins as $bin) {
  $settings['cache']['bins'][$bin] = 'cache.backend.null';
}

$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;

# Views debug
$config['views.settings']['ui']['show']['sql_query']['enabled'] = TRUE;
$config['views.settings']['ui']['show']['performance_statistics'] = TRUE;

