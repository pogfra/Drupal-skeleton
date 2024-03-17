<?php

# Production variables
$config['system.logging']['error_level'] = 'hide';
$config['system.performance']['cache']['page']['use_internal'] = TRUE;
$config['system.performance']['css']['preprocess'] = TRUE;
$config['system.performance']['css']['gzip'] = TRUE;
$config['system.performance']['js']['preprocess'] = TRUE;
$config['system.performance']['js']['gzip'] = TRUE;
$config['system.performance']['response']['gzip'] = TRUE;

$config['system.file']['temporary_maximum_age'] = 31536000;

