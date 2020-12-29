<?php

class MODEL {
  private $server = 'localhost';
  private $user = 'root';
  private $password = '';

  protected $data_base;
  protected $table;
  protected $table_columns;

  public function query($sql, ...$bind_parameters) {
    $conn = $this->connect();
    if (!$conn) echo 'problem';

    if (count($bind_parameters) === 0) {
      if (!$stmt = $conn->prepare($sql)) {
        if ($conn->error) echo '<br>' . "SQL error. SQL: $sql ERROR: $conn->error";
        return FALSE;
      }
    }
    else {
      $parameters_types = "";
      foreach ($bind_parameters as $value) {
        if (gettype($value) === 'string') $parameters_types .= 's';
        else if (gettype($value) === 'integer') $parameters_types .= 'i';
        else if (gettype($value) === 'double') $parameters_types .= 'd';
        else {
          $type = gettype($value);
          echo '<br>' . "Wrong parameter type at query: SQL: $sql TYPE: $type";
        }
      }
      if (!$stmt = $conn->prepare($sql)) {
        echo '<br>' . "SQL error. SQL: $sql ERROR: $conn->error";
        return FALSE;
      }
      if (!$stmt->bind_param($parameters_types, ...$bind_parameters)) {
        echo '<br>' . "Statement bind_param ERROR: $stmt->error";
        return FALSE;
      }
    }

    if (!$stmt->execute()) {echo $sql;
      echo '<br>' . "Statement execution ERROR: $stmt->error";
      return FALSE;
    }
    if (!$result = $stmt->get_result()) {
      if ($stmt->error) echo '<br>' . "Statement getResult ERROR: $stmt->error";
      return TRUE;
    }
    return $result;
  }

  public function queryBlob($sql, $blob, ...$testers) {
    $types = "b";

    foreach ($testers as $tester) {
      if (gettype($tester) === 'string') $types .= 's';
      else if (gettype($tester) === 'integer') $types .= 'i';
      else if (gettype($tester) === 'double') $types .= 'd';
      else {
        echo '<br>' . "Wrong type at queryBlob data type: " . gettype($tester);
        return FALSE;
      }
    }

    $conn = $this->connect();

    if (!$stmt = $conn->prepare($sql)) {
      echo '<br>' . "SQL error. SQL: $sql ERROR: $conn->error";
      return FALSE;
    }

    $null = NULL;
    if (!$stmt->bind_param($types, $null, ...$testers)) {
      echo '<br>' . "Statement bind_param ERROR: $stmt->error";
      return FALSE;
    }
    if ($blob && !$stmt->send_long_data(0, $blob)) {
      echo '<br>' . "Statement send long data ERROR: $stmt->error";
      return FALSE;
    }
    if (!$stmt->execute()) {
      echo '<br>' . "Statement execution ERROR: $stmt->error";
      return FALSE;
    }
    return TRUE;
  }

  public function connect() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table) {
      echo '<br>' . "You have to specify a table for class inheriting from MODEL.";
      return FALSE;
    }

    $conn = new mysqli($this->server, $this->user, $this->password, $this->data_base);

    if ($conn->error) {
      echo '<br>' . "Error on connection. class DBH function connect() ERROR: $conn->error";
      return FALSE;
    }

    return $conn;
  }

  public function createDataBase() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    $conn = new mysqli($this->server, $this->user, $this->password);

    if ($conn->error) {
      echo '<br>' . "Error on connection. class DBH function createDataBase() ERROR: $conn->error";
      return FALSE;
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $this->data_base";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function createDataBase() SQL: $sql, ERROR: $conn->error";
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function resetDataBase() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    $conn = new mysqli($server, $user, $password);

    $sql = "DROP DATABASE IF EXISTS $this->data_base";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function resetDataBase() SQL: $sql, ERROR: $conn->error";
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $this->data_base";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function resetDataBase() SQL: $sql, ERROR: $conn->error";
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function deleteDataBase() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    $conn = new mysqli($server, $user, $password);

    $sql = "DROP DATABASE IF EXISTS $this->data_base";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function deleteDataBase() SQL: $sql, ERROR: $conn->error";
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function createTable() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table) {
      echo '<br>' . "You have to specify a table for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table_columns) {
      echo '<br>' . "You have to specify the table columns for class inheriting from MODEL.";
      return FALSE;
    }

    $conn = $this->connect();

    $sql = "CREATE TABLE IF NOT EXISTS $this->table $this->table_columns";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function createTable() SQL: $sql, ERROR: $conn->error";
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function resetTable() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table) {
      echo '<br>' . "You have to specify a table for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table_columns) {
      echo '<br>' . "You have to specify the table columns for class inheriting from MODEL.";
      return FALSE;
    }

    $conn = $this->connect();

    $sql = "DROP TABLE IF EXISTS $this->table";

    $conn->query($sql);

    $sql = "CREATE TABLE IF NOT EXISTS $this->table $this->table_columns";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function resetTable() SQL: $sql, ERROR: $conn->error";
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  public function deleteTable() {
    if (!$this->data_base) {
      echo '<br>' . "You have to specify a data base for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table) {
      echo '<br>' . "You have to specify a table for class inheriting from MODEL.";
      return FALSE;
    }
    if (!$this->table_columns) {
      echo '<br>' . "You have to specify the table columns for class inheriting from MODEL.";
      return FALSE;
    }

    $conn = $this->connect();

    $sql = "DROP TABLE IF EXISTS $this->table";

    if (!$conn->query($sql)) {
      echo '<br>' . "Sql error! class DBH function deleteTable() SQL: $sql, ERROR: $conn->error";
      return FALSE;
    }
    else {
      return TRUE;
    }
  }
}
