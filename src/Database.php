<?php

class Database
{
    private $DB_HOST;
    private $DB_USER;
    private $DB_PW;
    private $DB_NAME;
    private $DB_CHARSET;

    private $CONNECT;

    public function __construct($host, $user, $pw, $name, $charset)
    {
        $this->DB_HOST = $host;
        $this->DB_USER = $user;
        $this->DB_PW = $pw;
        $this->DB_NAME = $name;
        $this->DB_CHARSET = $charset;
    }

    public function set_connect()
    {
        @$this->CONNECT = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PW, $this->DB_NAME);
        @$this->CONNECT->set_charset($this->DB_CHARSET);
        return $this->CONNECT;
    }

    public function get_conect()
    {
        if ($this->set_connect()->connect_errno) {
            return FALSE;
        } else {
            return $this->set_connect();
        }
    }
}
