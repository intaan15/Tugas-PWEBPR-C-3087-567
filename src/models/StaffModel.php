<?php

class StaffModel extends Database{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAll() {
        $query = "SELECT * FROM warehouse";
        return $this->qry($query)->fetchAll();
    }
    public function getById($id) {
        $query = "SELECT * FROM warehouse WHERE id = ?";
        return $this->qry($query, [$id])->fetch();
    }
    public function insert($data) {
        $query = "INSERT INTO warehouse
        (name, phone, salary)
        VALUES (?, ?, ?)";
        return $this->qry($query, [
            $data['name'],
            $data['phone'],
            $data['salary']
        ]);
    }
    public function update($data) {
        $query = "UPDATE warehouse SET name = ?, phone = ?, salary = ? WHERE id = ?";
        return $this->qry($query, [
            $data['name'],
            $data['phone'],
            $data['salary'],
            $data['id']
        ]);
    }
    public function delete($id) {
        $query = "DELETE FROM warehouse WHERE id = ?";
        return $this->qry($query, [$id]);
    }
}

?>