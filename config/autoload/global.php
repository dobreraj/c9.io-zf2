<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

/**
 * SET NAMES =
 * SET character_set_client = charset_name;
 * SET character_set_results = charset_name;
 * SET character_set_connection = charset_name;
 *
 * SET CHARACTER =
 * SET character_set_client = charset_name;
 * SET character_set_results = charset_name;
 * SET collation_connection = @@collation_database;
 *
 * // TODO: may have to remove, after testing
 * PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
 * dsn +=';charset=utf8;'
 */

return array (
		'db' => array (
				'driver' => 'Pdo',
				'dsn' => 'mysql:dbname=sql419251;host=sql4.freemysqlhosting.net',
				'driver_options' => array (
						PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\' ' .
								 ', CHARACTER_SET_DATABASE = \'UTF8\' ' .
								 ', CHARACTER SET \'UTF8\' ' .
								 ', CHARACTER_SET_RESULTS = \'UTF8\' ' .
								 ', CHARACTER_SET_SERVER = \'UTF8\' ' .
								 ', LC_TIME_NAMES = \'ro_RO\';',
								PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
				)
		),
		'service_manager' => array (
				'factories' => array (
						'Zend\Db\Adapter\Adaptor' => 'Zend\Db\Adapter\AdaptorServiceFactory'
				)
		)
);
