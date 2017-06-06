<?php


class DB
{

    //put your code here

    private $host = "localhost";
    private $user = "root";
    private $pwd = "MtWBUGZKZL1Np8bk";
    private $dbname = "wet2";
    private $dbobjekt = null;

    function connectToDB()
    {
        $this->dbobjekt = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
    }

    function getUserList()
    {
        $this->connectToDB();
        $usersArray = array();
        $query = "SELECT * FROM users";
        $ergebnis = $this->dbobjekt->query($query);
        while ($zeile = $ergebnis->fetch_object()) {
            //pro DB-Zeile wird neues User-Objekt erzeugt
            $users = new User($zeile->ID, $zeile->Anrede, $zeile->Vorname, $zeile->Nachname, $zeile->Addresse, $zeile->PLZ, $zeile->Ort, $zeile->Username, $zeile->Passwort, $zeile->Email);
            //jedes User-Objekt wird in das Array $userArray abgelegt
            array_push($usersArray, $users);
        }

        //Array befüllt mit User-Objekten wird retourniert
        return $usersArray;
    }

    function getFeaturedProductsList()
    {
        $this->connectToDB();
        $productArray = array();
        $query = "SELECT * FROM products WHERE Featured = 1";
        $ergebnis = $this->dbobjekt->query($query);
        while ($zeile = $ergebnis->fetch_object()) {
            //pro DB-Zeile wird neues User-Objekt erzeugt
            $products = new Produkt($zeile->products_id, $zeile->name, $zeile->price, $zeile->categoryid, $zeile->picture, $zeile->rating, $zeile->featured);
            //jedes User-Objekt wird in das Array $userArray abgelegt
            array_push($productArray, $products);
        }

        //Array befüllt mit User-Objekten wird retourniert
        return $productArray;
    }

    function getProductList($category)
    {
        $this->connectToDB();
        $productArray = array();
        $query = "SELECT * FROM products WHERE Categoryid = $category";
        $ergebnis = $this->dbobjekt->query($query);
        while ($zeile = $ergebnis->fetch_object()) {
            //pro DB-Zeile wird neues User-Objekt erzeugt
            $products = new Produkt($zeile->products_id, $zeile->name, $zeile->price, $zeile->categoryid, $zeile->picture, $zeile->rating, $zeile->featured);
            //jedes User-Objekt wird in das Array $userArray abgelegt
            array_push($productArray, $products);
        }

        //Array befüllt mit User-Objekten wird retourniert
        return $productArray;
    }


    function registerUser($userObjekt)
    {
        $this->connectToDB();
        $query = "INSERT INTO 'users' ('ID', "
            . "'Vorname', "
            . "'Nachname', "
            . "'Username', "
            . "'Email', "
            . "'Adresse', "
            . "'PLZ', "
            . "'Ort', "
            . "'Passwort', "
            . "'Anrede') VALUES (NULL, "
            . "'" . $userObjekt->getVorname() . "', "
            . "'" . $userObjekt->getNachname() . "', "
            . "'" . $userObjekt->getUsername() . "', "
            . "'" . $userObjekt->getEmail() . "', "
            . "'" . $userObjekt->getAdresse() . "', "
            . "'" . $userObjekt->getPLZ() . "', "
            . "'" . $userObjekt->getOrt() . "', "
            . "'" . $userObjekt->getPwd() . "', "
            . "'" . $userObjekt->getAnrede() . "');";

        $ergebnis = $this->dbobjekt->query($query);
    }

    function deleteUser($userId)
    {
        $this->connectToDB();
        $query = "DELETE FROM users where id = $userId";
        $ergebnis = $this->dbobjekt->query($query);
    }

    function updateUser($userObjekt)
    {
        $this->connectToDB();
        $query = "UPDATE 'users' SET 'Vorname' = '" . $userObjekt->getVorname() . "', "
            . "`Nachname` = '" . $userObjekt->getNachname() . "', "
            . "`Username` = '" . $userObjekt->getUsername() . "', "
            . "`Email` = '" . $userObjekt->getEmail() . "', "
            . "`Adresse` = '" . $userObjekt->getAdresse() . "', "
            . "`PLZ` = '" . $userObjekt->getPLZ() . "', "
            . "`Ort` = '" . $userObjekt->getOrt() . "', "
            . "`Passwort` = '" . $userObjekt->getPwd() . "', "
            . "`Anrede` = '" . $userObjekt->getAnrede() . "' "
            . "WHERE `user`.`ID` = " . $userObjekt->getId();
        $ergebnis = $this->dbobjekt->query($query);

    }

}


