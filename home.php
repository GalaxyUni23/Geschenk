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
            <a href="home.php">Home </a>||
            <a href="POSTURA.php">Postura </a>||
            <a href="GEBURTSTAG.php">Geburtstag </a>||
            <a href="form.html">Formular </a>
        </div>
    </div>

<!-- Leerzeilen, damit Inhalt nicht von Navigationsleiste überdeckt wird -->
    <br><br><br><br>


    <h1>Hallo Geburtstagskind!</h1>
    <?php
        $texttext = "Hallo! ";
        $error = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $error = "ungültiger Name";
            }
            elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $error = "ungültige E-mail";
            }
            else{
                echo "<h1> Hallo " . $_POST["name"] . "! </h1>";
                echo "<h2> Ich wünsche dir einen schönen Geburtstag! </h2>";
                echo "<h3> Liebe/r " . $_POST["name"] . ", Gebrutstagsgrüße wird gesendet an: " . $_POST["email"] . "</h3>";
            }
        }
    ?>

<!-- Einloggen, das immer auf der aktuellen Seite angezeigt/ausgeführt wird
$_SERVER und $_POST sind Hacker anfällig...
Schutz: htmlspecialchars(stripslashes(trim( $_POST["name"]))) -->
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <?php echo $error ?>
        <input type="submit">
    </form>

<div class="seiteninhalt"> 
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  

	Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  

	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.  

	Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. LoremLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  

	Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  

	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.  

	Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
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
