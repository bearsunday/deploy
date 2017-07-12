# BEAR.Sunday Deployer v5 support


# Download & Configuration

Download deployer script
```
(cd /path/to/project/bin)
git clone https://github.com/bearsunday/deploy.git
cd deploy
rm -rf .git
```

Edit `server.yml` for setting

```
prod:
    hostname:      example.com
    user:          release
    identity_file: ~
    deploy_path:   /var/www/Polidog.Todo
    repository:    git@github.com:koriym/Polidog.Todo.git
    branch:        deploy
    dotenv:        .env.prod
    context:       prod-html-app
    appname:       Polidog\Todo

stage:
    hostname:      example.com
    user:          release
    identity_file: ~
    deploy_path:   /var/www/Polidog.Todo
    repository:    git@github.com:koriym/Polidog.Todo.git
    branch:        master
    dotenv:        .env.stage
    context:       stage-html-app
    appname:       Polidog\Todo
```

 * Edit `.env.prod` or `.env.prod` for application setting.
 * Edit `deploy.php` for more customization. (See deployer [documentation](https://deployer.org/))


# Deploy 

```
cd /path/to/project/bin/deploy
php deployer.phar deploy prod
```    


See real example in [Polidog.Todo](https://github.com/koriym/Polidog.Todo).
