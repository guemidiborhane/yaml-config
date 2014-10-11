Yaml for __CakePHP 3__
====
implements most of the YAML 1.2 specification using [Symfony Yaml Component](https://github.com/symfony/Yaml) to CakePHP 3 for parsing config files

## Requirements

The 3.0 branch has the following requirements:

* CakePHP 3.0.0 or greater.

## Installation

* Install the plugin with composer from your CakePHP Project's ROOT directory (where composer.json file is located)
```sh
php composer.phar require chobo1210/yaml "dev-master"
```

OR
add this lines to your `composer.json`

```javascript
"require": {
  "cakephp/migrations": "dev-master"
}
```

And run `php composer.phar update`



then add this lines to your `config/bootstrap.php`

```php
use Yaml\Configure\Engine\YamlConfig;

Configure::config('yaml', new YamlConfig());
Configure::load('your_file', 'yaml');
```
your file must be in the `config/` directory __replace__ `your_file` with the name of your _YAML_ file __without the extension__

## Usage

if you want to use the plugin Shell to convert your current config add the lines to `config/bootstrap.php`

```php
Plugin::load('Yaml');
```
then in your Console or Terminal type :
```sh
bin/cake convert
```

Optionally you can set the name of your __YAML__ file ( without the extension )  default is : `app.yml`

```sh 
bin/cake convert your_file_name
``

the file will be create in your `config/` directory



## Example

```yml
debug: true

Asset:
  timestamp: true

# Default Database Connection informations
default_configuration: &default_configuration
  className: Cake\Database\Connection
  driver: Cake\Database\Driver\Mysql
  persistent: false
  host: localhost
  login: root
  password: secret
  prefix: false
  encoding: utf8
  timezone: +01:00
  cacheMetadata: true
  quoteIdentifiers: false  



# Datasources
Datasources:
  # Default datasource
  default: 
    <<: *default_configuration
    database: my_database
  # PHPUnit tests datasource
  test:
    <<: *default_configuration
    database: my_database_test



# Email Configuration
EmailTransport:
  default:
      className: Mail
      host: localhost
      port: 1025
      timeout: 30
      # username: user
      # password: secret
      client: null
      tls: null
Email:
  default:
      transport: default
      from: contact@localhost.dz
      cherset: utf-8
      headerCharset: utf-8   
```
