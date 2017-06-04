<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Variablen anlegen
$Anrede = null;
$Vorname = null;
$Nachname = null;
$Adresse = null;
$PLZ = null;
$Ort = null;
$User = null;
$Pwd = null;
$Pwd_confirm = null;
$Email = null;
$err = false;

//Überprüfen, ob Formular abgesendet wurde
if (isset($_GET['submit'])) {

    //Einzelne GET-Parameter prüfen, ob diese gesetzt sind bzw. ein Leer-String und Wert in Variable schreiben
    //Im Fehlerfall wird die Variable $err auf true gesetzt
    if (!empty($_GET['Anrede'])) {
        switch($_GET['Anrede']){
            case 'f': $Anrede = "Frau"; break;
            case 'h': $Anrede = "Herr"; break;
        }

    } else
        $err = true;

    if (!empty($_GET['Vorname'])) {
        $Vorname = $_GET['Vorname'];
    } else
        $err = true;

    if (!empty($_GET['Nachname'])) {
        $Nachname = $_GET['Nachname'];
    } else
        $err = true;

    if (!empty($_GET['Adresse'])) {
        $Adresse = $_GET['Adresse'];
    } else
        $err = true;

    if (!empty($_GET['PLZ'])) {
        $PLZ = $_GET['PLZ'];
    } else
        $err = true;

    if (!empty($_GET['Ort'])) {
        $Ort = $_GET['Ort'];
    } else
        $err = true;

    if (!empty($_GET['User'])) {
        $User = $_GET['User'];
    } else
        $err = true;

    if (!empty($_GET['Pwd']) && !empty($_GET['Pwd_confirm'])) {
        $Pwd = $_GET['Pwd'];
    } else
        $err = true;

    if (!empty($_GET['Pwd_confirm'])) {
        $Pwd_confirm = $_GET['Pwd_confirm'];
    } else
        $err = true;

    if($Pwd != $Pwd_confirm){
        $err = true;
    }

    if (!empty($_GET['Email'])) {
        $Email = $_GET['Email'];
    } else
        $err = true;

    //wenn alle Daten vorhanden sind und kein Fehler aufgetreten ist, wird neues User-Objekt erzeugt
    if ($err == false) {
        $user = new User(0,$Anrede,$Vorname,$Nachname,$Adresse,$PLZ,$Ort,$User,$Pwd,$Email);
        //user-Objekt wird in registerUser-Funktion der DB-Klasse übergeben
        $db->registerUser($user);
    }else{
        echo "Bitte füllen Sie alle Felder korrekt aus!";
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>formular</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <form action='Register.php' method="post">
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control" required >
                    <option value="">Please choose your gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Your name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="surname" placeholder="Your surname" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your email adress"class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="street" placeholder="Your street" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="zip" placeholder="Your ZIP" class="form-control" required pattern="(?=.*?[0-9]).{4,}" title="At least 4 numbers.">
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="Your city" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Your username" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Your password" class="form-control" 
                       required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" 
                       title="Password has to contain at least 8 characters with 1 lower letter, 1 upper letter and 1 number.">
            </div>
            <div class="form-group">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return validate()">Create account</button>
        </form>
        
        <!-- password match check !-->
        <script type="text/javascript">
            function validate() {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirmPassword").value;
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            }
        </script>

    </body>
</html>




<h2>User-Registrierung</h2>

<form class="form-horizontal">
    <div class="form-group">
        <label for="anrede" class="col-sm-2 control-label">Anrede</label>
        <div class="col-sm-10">
            <select name="Anrede" class="form-control" id="anrede">
                <option value="k">Keine Angabe</option>
                <option value="f">Frau</option>
                <option value="h">Herr</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="vorname" class="col-sm-2 control-label">Vorname</label>
        <div class="col-sm-10">
            <input type="text" name="Vorname" class="form-control" id="vorname" placeholder="Vorname">
        </div>
    </div>
    <div class="form-group">
        <label for="nachname" class="col-sm-2 control-label">Nachname</label>
        <div class="col-sm-10">
            <input type="text" name="Nachname" class="form-control" id="nachname" placeholder="Nachname">
        </div>
    </div>
    <div class="form-group">
        <label for="adresse" class="col-sm-2 control-label">Adresse</label>
        <div class="col-sm-10">
            <input type="text" name="Adresse" class="form-control" id="adresse" placeholder="Höchstädtplatz 6">
        </div>
    </div>
    <div class="form-group">
        <label for="plz" class="col-sm-2 control-label">PLZ</label>
        <div class="col-sm-10">
            <input type="number" name="PLZ" class="form-control" id="plz" placeholder="1200">
        </div>
    </div>
    <div class="form-group">
        <label for="ort" class="col-sm-2 control-label">Ort</label>
        <div class="col-sm-10">
            <input type="text" name="Ort" class="form-control" id="ort" placeholder="Wien">
        </div>
    </div>
    <div class="form-group">
        <label for="user" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="text" name="User" class="form-control" id="user" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="Pwd" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword_confirm" class="col-sm-2 control-label">Password Bestätigung</label>
        <div class="col-sm-10">
            <input type="password" name="Pwd_confirm" class="form-control" id="inputPassword_confirm" placeholder="Password Wdh">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="Email" class="form-control" id="inputEmail3" placeholder="me@home.at">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-default">Registrieren</button>
        </div>
    </div>
</form>

