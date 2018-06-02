<?php

class User {
  private $id;
  private $firstName;
  private $lastName;
  private $gender;
  private $email;
  private $password;
  private $weddingDate;

  public function __construct($firstName, $lastName, $gender, $email, $password, $weddingDate) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->gender = $gender;
    $this->email = $email;
    $this->password = $password;
    $this->weddingDate = $weddingDate;
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

  public function getWeddingDate() {
    return $this->weddingDate;
  }
}