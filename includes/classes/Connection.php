<?php

/**
 * Hooks Class
 *
 * This class aims to connect to the database.
 *
 * @package		Connect in the database
 * @author		Guilherme Alves (SpinXO)
 * @link		https://github.com/GuiAlves2708
 */
class Connection {

	/**
	 * Array of configurations for Database
	 * @var array
	 */
	private $config = array();

	/**
	 * Return the Database connection
	 *
	 * @var bool
	 */
	private $db = null;

	/**
	 * Database DSN
	 *
	 * @var string
	 */
	private $dsn = '';

	/**
	 * Class constructor
	 *
	 * @return array $config
	 */
	public function __construct() {

		//Transform variable in global
		global $config;

		$this->config = array(
			'host' => $config['database']['host'],
			'user' => $config['database']['user'],
			'pass' => $config['database']['pass'],
			'base' => $config['database']['base']
		);
	}

	/**
	 * Run PDO
	 *
	 * Try connect with mysql using PDO
	 *
	 * @return bool | TRUE on success or FALSE on failure
	 */
	public function connect() {
		$this->dsn = 'mysql:host=' . $this->config['host'] . ';dbname=' . $this->config['base'];

		$this->db = new PDO($this->dsn, $this->config['user'], $this->config['pass'], array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
		));

		return $this->db;
	}
}