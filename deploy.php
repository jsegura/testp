<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', '');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('monster.javiersegura.net')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/srv/horariodigital.com/app');

// Hooks

after('deploy:failed', 'deploy:unlock');
