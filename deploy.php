<?php
namespace Deployer;

require 'recipe/laravel.php';

//inventory('./hosts.yml');

// Project name
set('application', 'FreshPrince');

// Project repository
set('repository', 'https://github.com/adexphem/freshprince.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts
host('http://freshprincedigitalprinters.com/')
    ->set('deploy_path', 'home/freshpri/public_html');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: $result");
});

