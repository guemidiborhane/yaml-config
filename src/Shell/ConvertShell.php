<?php

namespace Yaml\Shell;

use Cake\Console\Shell;
use Symfony\Component\Yaml\Dumper;

class ConvertShell extends Shell {

	public function main($output = 'app') {
		include CONFIG.'app.php';

		$dumper = new Dumper();
		$yaml = $dumper->dump($config, 5);
		file_put_contents(CONFIG . $output . '.yml', $yaml);
	}

}
