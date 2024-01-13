<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'simonrjones.net');

// Project repository
set('repository', 'git@bitbucket.org:simonrjones/simonrjones.net.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_files', ['web/wp-config.local.php']);
set('shared_dirs', ['web/wp-content/uploads']);

// Writable dirs by web server
set('writable_dirs', ['web/wp-content/uploads']);
set('allow_anonymous_stats', false);

// Custom
set('keep_releases', 10);

// Hosts

host('production')
    ->stage('production')
    ->hostname('63.33.41.34')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/simonrjones.net/production');

host('staging')
    ->stage('staging')
    ->hostname('63.33.41.34')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/simonrjones.net/staging');


// Tasks
desc('Deploy simonrjones.net');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
//    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
