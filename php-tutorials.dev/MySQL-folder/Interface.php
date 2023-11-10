<?php
    interface DBInterface {
        public function db_connect();
        public function insert($data);
        public function read($where);
        public function update($where);
        public function delete($where);
    }