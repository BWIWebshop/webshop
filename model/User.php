<?php

class User {

//put your code here

    private $id = null;
    private $anrede = null;
    private $vorname = null;
    private $nachname = null;
    private $adresse = null;
    private $plz = null;
    private $ort = null;
    private $username = null;
    private $pwd = null;
    private $email = null;

//Konstruktor
//In Netbeans automatisch erzeugt via Insert Code...
    function __construct($id, $anrede, $vorname, $nachname, $adresse, $plz, $ort, $username, $pwd, $email) {
        $this->id = $id;
        $this->anrede = $anrede;
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->adresse = $adresse;
        $this->plz = $plz;
        $this->ort = $ort;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->email = $email;
    }

//getter und setter für den Zugriff auf die Objekt-Eigenschaften
//In Netbeans automatisch erzeugt via Insert Code...
    function getId() {
        return $this->id;
    }

    function getAnrede() {
        return $this->anrede;
    }

    function getVorname() {
        return $this->vorname;
    }

    function getNachname() {
        return $this->nachname;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getPlz() {
        return $this->plz;
    }

    function getOrt() {
        return $this->ort;
    }

    function getUsername() {
        return $this->username;
    }

    function getPwd() {
        return $this->pwd;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAnrede($anrede) {
        $this->anrede = $anrede;
    }

    function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setPlz($plz) {
        $this->plz = $plz;
    }

    function setOrt($ort) {
        $this->ort = $ort;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    function setEmail($email) {
        $this->email = $email;
    }

}


