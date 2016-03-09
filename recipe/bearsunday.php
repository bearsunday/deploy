<?php

require 'recipe/common.php';

set('shared_dirs', ['var/log', 'var/db']);
set('writable_dirs', ['var/tmp', 'var/log']);
task('database:migrate', function()  {
    upload('{{dotenv}}', '{{release_path}}/.env');
    run("
        cd {{release_path}};
        composer setup;
    ");
});
task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:symlink',
    'database:migrate',
    'cleanup',
])->desc('Deploy your BEAR.Sunday project');

after('deploy', 'success');
