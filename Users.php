<?php
require_once 'model.php';

class Users extends MODEL {

  public function __construct() {
    $this->data_base = "catalog_animaux";
    $this->table = "users";
    $this->table_columns = "(
      id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
      username text NOT NULL,
      password text NOT NULL
    )";
    $this->createDataBase();
    $this->createTable();

    if (empty($this->get_username("Alexa")) === TRUE) $this->init_admin("Alexa"); //Si les administrateurs ne sont pas définis
    if (empty($this->get_username("Tuncay")) === TRUE) $this->init_admin("Tuncay");
    if (empty($this->get_username("Warren")) === TRUE) $this->init_admin("Warren");
  }

  public function insert_data() {
    $password = password_hash('kangourou', PASSWORD_BCRYPT);
    $this->query("INSERT INTO $this->table  VALUES (1,'Alexa', $password),(2,'Tuncay', $password),(3,'Warren', $password)");
  }

  public function add($username) {
    $this->query("INSERT INTO $this->table (name) VALUES (?)", $username);
  }

  public function remove($id) {
    $this->query("DELETE FROM $this->table WHERE id = ?", $id);
  }

  public function get_id($id) {
    return $this->query("SELECT * FROM $this->table WHERE id = ?", $id)->fetch_assoc();
  }

  public function get_username($username) {
    return $this->query("SELECT * FROM $this->table WHERE username = ?", $username)->fetch_assoc();
  }

  public function set_username($id, $username) {
    $this->query("UPDATE $this->table SET username = ? WHERE id = ?", $username, $id);
  }

  public function set_password($id, $password) {
    $this->query("UPDATE $this->table SET password = ? WHERE id = ?", $password, $id);
  }

  public function get_all() {
    return $this->query("SELECT * FROM $this->table");
  }

  public function delete_all() {
    $this->resetTable();
  }
}
