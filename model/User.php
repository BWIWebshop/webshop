<?php

class User {

//put your code here

    private $gender = null;
    private $name = null;
    private $surname = null;
    private $email = null;
    private $address = null;
    private $zip = null;
    private $city = null;
    private $username = null;
    private $password = null;
    private $payment = null;
    
 //getter und setter für den Zugriff auf die Objekt-Eigenschaften
//In Netbeans automatisch erzeugt via Insert Code...
    function getPayment(){
        return $this->payment;
    }
            
    function getGender() {
        return $this->gender;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getEmail() {
        return $this->email;
    }

    function getAddress() {
        return $this->address;
    }

    function getZip() {
        return $this->zip;
    }

    function getCity() {
        return $this->city;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPayment($payment){
        $this->payment = $payment;
    }
    
    function setAddress($address) {
        $this->address = $address;
    }

    function setZip($zip) {
        $this->zip = $zip;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }


//Konstruktor
//In Netbeans automatisch erzeugt via Insert Code...
    function __construct($gender, $name, $surname, $email, $address, $zip, $city, $username, $password, $payment) {
        $this->gender = $gender;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->address = $address;
        $this->zip = $zip;
        $this->city = $city;
        $this->username = $username;
        $this->password = $password;
        $this->payment = $payment;
    }
    
}