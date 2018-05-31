<?php

class User {
  private $id;
  private $firstName;
  private $lastName;
  private $gender;
  private $email;
  private $password;

  public function __construct($firstName, $lastName, $gender, $email, $password) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->gender = $gender;
    $this->email = $email;
    $this->password = $password;
  }

  public function getId() {
    return $this->id;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function getGender() {
    return $this->gender;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }
}