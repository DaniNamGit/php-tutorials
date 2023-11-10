<?php
    abstract class DBCommonMethods {
        private $host;
        private $db;
        private $uid;
        private $password;
        public function __construct($host, $db, $uid, $password) {
            $this->host     = $host;
            $this->db       = $db;
            $this->uid      = $uid;
            $this->password = $password;
        }
    }