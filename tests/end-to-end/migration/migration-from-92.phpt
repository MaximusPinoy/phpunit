--TEST--
Configuration migration from PHPUnit 9.2 format works
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--migrate-configuration';

chdir(sys_get_temp_dir());
copy(__DIR__ . '/migration-from-92/phpunit-9.2.xml', 'phpunit.xml');

require __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Created backup:         %sphpunit.xml.bak
Migrated configuration: %sphpunit.xml
