<?php

$hs = "/";
$head1 = "<font size='+1'></font>";
date_default_timezone_set("Asia/Jakarta");

class webclass extends PDO
{
    private $engine;
	private $host;
	private $database;
	private $user;
	private $pass;

    public function __construct()
	{
		$this->engine	= 'mysql';
		$this->host	  	= 'localhost';
		$this->database = 'perpus';
		$this->user 	= 'root';
		$this->pass 	= '';

		$dns = $this->engine . ':dbname=' . $this->database . ";host=" . $this->host;
		parent::__construct($dns, $this->user, $this->pass);
	}

    public function webtitle()
    {
        $title = "IPM Sidoarjo - Pelajar Eksis";
        return $title;
    }

    public function webname()
    {
        $name = "IPM SIDOARJO";
        return $name;
    }
}
?>