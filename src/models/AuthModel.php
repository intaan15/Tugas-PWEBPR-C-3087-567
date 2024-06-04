<?php

class AuthModel extends Database {
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll($username) {
        $query = "SELECT * FROM akun WHERE username='$username'";
        return $this->qry($query)->fetch();
    }

    public function insert($data) {
        $query = "INSERT INTO akun
        (email, username, password)
        VALUES (?, ?, ?)";
        return $this->qry($query, [
            $data['email'],
            $data['username'],
            password_hash($data['password'], PASSWORD_DEFAULT)
        ]);
    }
}