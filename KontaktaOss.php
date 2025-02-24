<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/08ef6d94c6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="Header" id="Header">
        <div class="logoandname">
            <img src="Logotyp.webp" alt="logo">
            NordicTech Solutions
        </div>
        <nav>
            <a href="Index.php">Hem</a>
            <a href="OmOss.php">Om oss</a>
            <a href="Tjenster.php">Tjänster</a>
            <button type="button" onclick="Scroll()">Kontakta Oss</button>
        </nav>
    </div> 

    <div class="Hero_Section">
        <h1>Kontakta oss!</h1>
            <h3>Vi hjälper företag att växa med smarta digitala lösningar och teknisk expertis. Från webb- och systemutveckling till IT-strategi – NordicTech Solutions är din partner i den digitala eran.</h3>
        </div>
    </div>

    <div class="kontaktaoss" id="kontaktaoss" ">
        <h1>Kontakta oss nedan</h1>
        <form action="Index.php" method="post">
            <input type="text" name="Name" placeholder="Namn">
            <input type="text" name="Ämne" placeholder="Ämne">
            <input type="text" name="Epost" placeholder="Epost">
            <input type="text" name="Frågor" placeholder="Ange din eller dina frågor.">
            <input type="submit" name="send" value="Skicka">

            <?php
                if  (isset($_POST['send'])){
                    $name = sanitize($_POST['Name']);   
                    $question = sanitize($_POST['Frågor']);
                    $subject = sanitize($_POST['Ämne']);
                    $email = sanitize($_POST['Epost']);
                     
                    ?>
                        <br><br> Din fråga har skickats! Vi återkommer med svar inom kort!
                    <?php
                }
            ?>
        </form>
    </div>

    <div class="Footer">
        <div class="InFooter">
            <img src="Logotyp.webp" alt="Logo">
            NordicTech Solutions
        </div>

        <div class="filler"> </div>

        <div class="InFooter">
        	📍 Adress: [Exempeladress] <br>
            📞 Telefon: +46 XXX-XXX-XXX <br>
	        ✉️ E-post: info@nordictech.se <br>
        </div>
    </div>
    <div class="UnderFooter">
        <button onclick="ToTop()">^</button>
    </div>
</body>
</html>

<script>
    var element = document.getElementById("kontaktaoss");
    function Scroll() {
        element.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
    }

    var header = document.getElementById("Header");
    function ToTop() {
        header.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
    }
</script>