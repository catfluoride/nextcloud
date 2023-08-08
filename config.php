<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => [
     'host' => 'redis',
     'port' => 6379,
   ],
  'filelocking.enabled' => true,
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
  'instanceid' => '<this is set by Nextcloud itself>',
  'passwordsalt' => '<this is set by Nextcloud itself>',
  'secret' => '<this is set by Nextcloud itself>',
  'trusted_domains' => 
  array (
    0 => 'nextcloud.mydomain.tld',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '27.0.1.2',
  'overwrite.cli.url' => 'https://nextcloud.mydomain.tld',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'mysqlpassword',
  'installed' => true,
  'overwriteprotocol' => 'https',
  'mail_smtpmode' => 'smtp',
  'mail_smtphost' => '<smtp server>',
  'mail_sendmailmode' => 'smtp',
  'mail_smtpauth' => 1,
  'mail_from_address' => '<from: email>',
  'mail_domain' => '<emain domain>',
  'mail_smtpport' => '<smtp port>',
  'mail_smtpsecure' => '<encryption>',
  'mail_smtpname' => '<smpt username for authentication>',
  'mail_smtppassword' => '<smtp password for authentication>',
);
