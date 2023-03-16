<?php

  require_once 'config.php';

  class Database extends Config {
    // Insert User Into Database
    public function insert($prenom, $nom, $email, $password, $role) {
      $sql = 'INSERT INTO users(id_role, mail, password, nom, prenom) VALUES (:id_role, :mail, :password, :nom, :prenom)';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'id_role' => $role,
        'mail' => $email,
        'password' => $password,
        'nom' => $nom,
        'prenom' => $prenom,
    ]);
      return true;
    }

    // Fetch All Users From Database
    public function read() {
      $sql = 'SELECT * FROM users ORDER BY id DESC';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    // Fetch Single User From Database
    public function readOne($id) {
      $sql = 'SELECT * FROM users WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }

    // Update Single User
    public function update($id, $prenom, $nom, $email, $password, $role) {
      $sql = 'UPDATE users SET id_role = ?, id = ?, mail = ?, password = ?, nom = ?, prenom = ? WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'id_role' => $role,
        'id' => $id,
        'mail' => $email,
        'password' => $password,
        'nom' => $nom,
        'prenom' => $prenom,
      ]);

      return true;
    }

    // Delete User From Database
    public function delete($id) {
      $sql = 'DELETE FROM users WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      return true;
    }
  }

?>