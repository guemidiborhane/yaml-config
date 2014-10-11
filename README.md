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

then add this lines to your `config/bootstrap.php`

```php
use Yaml\Configure\Engine\YamlConfig;

Configure::config('yaml', new YamlConfig());
Configure::load('your_file', 'yaml');
```

your file must be in the `config/` directory __replace__ 'your_file' with the name of your _YAML_ file __without the extension__

