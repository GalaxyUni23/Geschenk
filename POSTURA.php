<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mama Geburtstag</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<!-- Navigationsleiste -->
    <div class="topnav">
	    <div id="home"><a href="index.php"> </a></div>
	    <br>
	    <div class="Leiste">
            <a href="index.php">Home </a>||
            <a href="POSTURA.php">Postura </a>||
            <a href="GEBURTSTAG.php">Geburtstag </a>
        </div>
    </div>
    <h1>Hallo Mama!</h1>
    <?php
        $texttext = "Hallo! <br> Hier steht zb alles zu Postura!";
        echo "<h1> $texttext </h1>";
    ?>

<!-- Datenbanken einbinden-->
    <?php
        $servername = "localhost";
        $username = "root";
        $passwort = "";
        $datenbank = "bibershop";

        $conn = mysqli_connect($servername, $username, $passwort, $datenbank);
        if($conn->connect_error) {
            die ("es funktioniert nicht..." . $conn->connect_error);
        }
        echo "connected" . "<br>";

        $sql = "SELECT * FROM produkte";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($i = $result->fetch_assoc()){
                echo "PID: " . $i["PID"] . "<br>" . "<h5>" .  "<i>Name:</i> " . $i["Pname"] . "</h5>" . "<br>" .  "<i>Beschreibung:</i> " . $i["Pbeschreibung"] . "<br> <br><br><br><br>" ;
            }
        }
        else{
            echo "kein Kunde gefunden" . $conn->error;
        }
        
        mysqli_close($conn);


    ?>


    <div class="gallerie"
	data-flickity-options='{ "wrapAround": true }'>
	<div class="galleriefoto"><p class="cursor typewriter-animation">Tauche ein in die wunderbare Welt von Postura! </p> </div>
	<div class="galleriefoto"></div>
	<div class="galleriefoto"></div>
	<div class="galleriefoto"></div>
	<div class="galleriefoto"></div>
	</div>


<!--Footer-->
    <div class="item" id="footer"> 
	    <div id="footerinhalt"> © 2026 Jamie-Lee Jones</div>  
    </div>

<!-- für java script:-->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="script.js"></script>
</body>
</html>