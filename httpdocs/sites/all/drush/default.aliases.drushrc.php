<?php
$aliases['pre'] = array (
  'uri' => 'talkinglessons.com',
  'root' => '/var/www/talkinglessons.com/httpdocs/',
  'remote-host' => 'talkinglessons.com',
  'remote-user' => 'deployer',
  'command-specific' => array(
        'sql-sync' => array(
            'no-cache' => TRUE,
        ),
        'rsync' => array (
            'delete' => TRUE,
            'exclude-paths' => '/',
        ),
    ),
);
