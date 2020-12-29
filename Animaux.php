<?php
require_once 'model.php';

class Animaux extends MODEL {

  public function __construct() {
    $this->data_base = "catalog_animaux";
    $this->table = "animaux";
    $this->table_columns = "(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      name TEXT NOT NULL,
      type TEXT,
      family TEXT,
      alimentation TEXT,
      description TEXT,
      photo MEDIUMBLOB,

      archived CHAR(5) DEFAULT 'false'
    )";
    $this->createDataBase();
    $this->createTable();
  }

  public function add($name) {
    $this->query("INSERT INTO $this->table (name) VALUES (?)", $name);
  }

  public function remove($id) {
    $this->query("DELETE FROM $this->table WHERE id = ?", $id);
  }

  public function archive($id) {
    $this->query("UPDATE $this->table SET archived = ? WHERE id = ?", "true", $id);
  }

  public function unarchive($id) {
    $this->query("UPDATE $this->table SET archived = ? WHERE id = ?", "false", $id);
  }

  public function get_id($id) {
    return $this->query("SELECT * FROM $this->table WHERE id = ?", $id)->fetch_assoc();
  }

  public function get_name($name) {
    return $this->query("SELECT * FROM $this->table WHERE name = ?", $name)->fetch_assoc();
  }

  public function get_type($type) {
    return $this->query("SELECT * FROM $this->table WHERE type = ?", $type)->fetch_assoc();
  }

  public function get_family($family) {
    return $this->query("SELECT * FROM $this->table WHERE family = ?", $family)->fetch_assoc();
  }

  public function get_alim($alim) {
    return $this->query("SELECT * FROM $this->table WHERE alimentation = ?", $alim)->fetch_assoc();
  }

  public function get_archived() {
    return $this->query("SELECT * FROM $this->table WHERE archived = ?", "true")->fetch_assoc();
  }

  public function set_name($id, $name) {
    $this->query("UPDATE $this->table SET name = ? WHERE id = ?", $name, $id);
  }

  public function set_type($id, $type) {
    $this->query("UPDATE $this->table SET type = ? WHERE id = ?", $type, $id);
  }

  public function set_family($id, $family) {
    $this->query("UPDATE $this->table SET family = ? WHERE id = ?", $family, $id);
  }

  public function set_alim($id, $alim) {
    $this->query("UPDATE $this->table SET alimentation = ? WHERE id = ?", $alim, $id);
  }

  public function set_description($id, $description) {
    $this->query("UPDATE $this->table SET description = ? WHERE id = ?", $description, $id);
  }

  public function set_photo($id, $photo) {
    $this->queryBlob("UPDATE $this->table SET photo = ? WHERE id = ?", $photo, $id);
  }

  public function get_all() {
    return $this->query("SELECT * FROM $this->table");
  }

  public function delete_all() {
    $this->resetTable();
  }

  public function get_unarchived() {
    return $this->query("SELECT * FROM $this->table WHERE archived = ?", "false");
  }

}
