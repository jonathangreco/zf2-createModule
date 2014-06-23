<?php
/**
 * Ceci est le boostrap d'ocramius que nous testons au sein de notre Provider
 * Poir vérifier si l'architecture de notre projet est faisable plus facilement;
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>  
 */
 
chdir(__DIR__);
 
$previousDir = '.';
 
while (!file_exists('config/application.config.php')) {
    $dir = dirname(getcwd());
 
    if ($previousDir === $dir) {
        throw new RuntimeException(
            'Unable to locate "config/application.config.php":'
                . ' is the Content module in a sub-directory of your application skeleton?'
        );
    }
 
    $previousDir = $dir;
    chdir($dir);
}
if(empty($loader)) {
	$loader = @include_once __DIR__.'../../../../vendor/autoload.php';
}
/* @var $loader \Composer\Autoload\ClassLoader */
$loader->add('ProviderTest\\', __DIR__);

$config = require $dir . '/module/Application/tests/TestConfig.php.dist';

\ProviderTest\Util\ServiceManagerFactory::setConfig($config);