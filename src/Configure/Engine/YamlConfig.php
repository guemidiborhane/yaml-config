<?php
namespace Yaml\Configure\Engine;

use Cake\Core\Configure\ConfigEngineInterface;
use Cake\Core\Configure\FileConfigTrait;
use Cake\Core\Exception\Exception;
use Symfony\Component\Yaml\Yaml;

class YamlConfig implements ConfigEngineInterface
{

    use FileConfigTrait;

    protected $_path = null;

    protected $_extension = '.yml';

    public function __construct($path = null)
    {
        if ($path === null) {
            $path = CONFIG;
        }
        $this->_path = $path;
    }

    /**
     * @param string $key
     * @return array
     */
    public function read($key)
    {
        $file = $this->_getFilePath($key, true);
        $config = Yaml::parse($file);
        if (is_array($config)) {
            return $config;
        } else {
            throw new Exception(sprintf('Config file "%s" did not return an array', $key . '.php'));
        }
    }

    public function dump($key, array $data)
    {
        // Code to dump data to file
    }
}
