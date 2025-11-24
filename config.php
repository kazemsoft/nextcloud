<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'upgrade.disable-web' => true,
  'passwordsalt' => 'xffwo/C30jT8FHQNWPe93awTuI6/nl',
  'secret' => '0Pc1HLkhdnzOpQd5R5LaLS28g4LgWwGBHg0ggQj4or9TObcw',
  'trusted_domains' => 
  array (
    0 => 'cloud.gholian.ir',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '31.0.9.1',
  'overwrite.cli.url' => 'https://cloud.gholian.ir',
  'overwriteprotocol' => 'https',
  'overwritehost' => 'cloud.gholian.ir',
  'forwarded_for_headers' => array('HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED_HOST', 'HTTP_X_FORWARDED_PROTO'),
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_admin',
  'dbpassword' => 'moFXLWcwyJvNqXLmT06wlsxx7wMfHq',
  'instanceid' => 'oc1cg3iflzc7',
  'installed' => true,
);
