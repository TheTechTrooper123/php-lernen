<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Formular</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <!-- Formularverarbeitung -->
    <?php 
    $name_fehler = $email_fehler = $website_fehler = $kommentar_fehler = $geschlecht_fehler = "";
    $name = $email = $website = $kommentar = $geschlecht = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["name"])) {
            $name_fehler = "Name ist erforderlich";
        } else {
            $name = eingabe_pruefen($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $name_fehler = "Nur Buchstaben und Leerzeichen erlaubt";
            }
        }
        
        if(empty($_POST["email"])) {
            $email_fehler = "E-Mail ist erforderlich";
        } else {
            $email = eingabe_pruefen($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_fehler = "Ungültiges E-Mail-Format";
            }
        }
        
        if(empty($_POST["url"])) {
            $website = "";
        } else {
            $$website = eingabe_pruefen($_POST["url"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $website_fehler = "Ungültige URL";
            }
          
        }
        
        if(empty($_POST["kommentar"])) {
            $kommentar = "";
        } else {
            $kommentar = eingabe_pruefen($_POST["kommentar"]);
        }
        
        if(empty($_POST["geschlecht"])) {
            $geschlecht_fehler = "Geschlecht ist erforderlich";
        } else {
            $geschlecht = eingabe_pruefen($_POST["geschlecht"]);
        }
    }
    
    function eingabe_pruefen($daten) {
        $daten = trim($daten);
        $daten = stripslashes($daten);
        $daten = htmlspecialchars($daten);
        
        return $daten;
    }
    ?>
    <br><br>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Name: <br><input type="text" name="name" id="" value="<?php echo $name;?>">
        <span class="error">* <?php echo $name_fehler;?></span>
        <br><br>

        E-Mail: <br><input type="email" name="email" id="" value="<?php echo $email;?>"> 
        <span class="error">* <?php echo $email_fehler;?></span>
        <br><br>

        Webseite: <br><input type="url" name="url" id="" value="<?php echo $website;?>">
        <span class="error"><?php echo $website_fehler;?></span>
        <br><br>

        Kommentar: <br>
        <textarea name="kommentar" id="" cols="40" rows="5"><?php echo $kommentar;?></textarea><br><br>

        Geschlecht: <span class="error">* <?php echo $geschlecht_fehler;?> </span> <br><br>
        <input type="radio" name="geschlecht" value="weiblich"
        <?php if(isset($geschlecht) && $geschlecht=="weiblich") echo "checked"; ?>>Weiblich <br><br>

        <input type="radio" name="geschlecht" value="maennlich"
        <?php if(isset($geschlecht) && $geschlecht=="maennlich") echo "checked"; ?>>Männlich <br><br>

        <input type="radio" name="geschlecht" value="sonstig"
        <?php if(isset($geschlecht) && $geschlecht=="sonstig") echo "checked"; ?>>Sonstig<br><br>

        <input type="submit" name="submit" value="Absenden">
    </form>
    <br><br>
    <!-- übermittelte Formulardaten ausgeben -->
    <?php 
        echo "Nachfolgend deine übermittelten Daten <br><br>"; 
        echo "Name: $name";
        echo "<br><br>";
        echo "E-Mail: $email";
        echo "<br><br>"; 
        echo "Webseite: $website";
        echo "<br><br>"; 
        echo "Kommentar: $kommentar";
        echo "<br><br>";
        echo "Geschlecht: $geschlecht";
        echo "<br><br>";
    ?>
</body>
</html>
