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
        <h1>Innovativa IT-lösningar för en digital framtid</h1>
            <h3>Vi hjälper företag att växa med smarta digitala lösningar och teknisk expertis. Från webb- och systemutveckling till IT-strategi – NordicTech Solutions är din partner i den digitala eran.</h3>
            <button type="button" onclick="Tjenster()">Läs mer om våra tjänster</button>
        </div>
    </div>

    <div class="OmOss">
        <h1>Varför välja oss?</h1>
        <p>Med över 10 års erfarenhet inom IT-branschen levererar vi skräddarsydda lösningar som matchar ditt 
            företags behov. Vi kombinerar innovation med säkerhet för att skapa digitala lösningar i världsklass.</p>

        <div class="Info">
            <div class="Icons">
                <div class="Icon"><img src="rocket-outline.svg" alt="rocket"></div>
                <div class = "text">Innovation <br>–<br> Vi skapar framtidens lösningar idag.</div>
            </div>
           
            <div class="Icons">
                <div class="Icon"><img src="lock-closed-outline.svg" alt="lock"></div>
                <div class = "text">Säkerhet <br>–<br> Dina data är vår prioritet.</div>            
            </div>

            <div class="Icons">
                <div class="Icon"><img src="thumbs-up-outline.svg" alt="thumbs_up"></div>
                <div class = "text">Kundfokus <br>–<br> Vi arbetar nära dig för bästa resultat.</div>
            </div>

            <div class="Icons">
                <div class="Icon"><img src="flash-outline.svg" alt="flash"></div>
                <div class = "text">Effektivitet <br>–<br> Snabba och pålitliga leveranser.</div>
            </div>
        </div>
    </div>

    <div class="Tjenster">
        <h1>Vad vi erbjuder</h1>
        <div class="boxes">
            <div class="box">Webbutveckling <br>–<br> Bygg kraftfulla och responsiva hemsidor.</div>
            <div class="box">IT-konsultation <br>–<br> Skräddarsydda IT-strategier för företag.</div>
        </div>
        <div class="boxes">
            <div class="box">Molnlösningar <br>–<br> Smidiga och säkra digitala lösningar.</div>
            <div class="box">Cybersäkerhet <br>–<br> Skydda din data med de senaste säkerhetslösningarna.</div>
        </div>
        <button type="button" onclick="Tjenster()">Se alla tjänster</button>
    </div>

    <div class="Recensioner">
        <h1>Våra kunder<br><br></h1>
        <div class="TextBubble">
            <div class="Bubble">
                <div class="Text">NordicTech hjälpte oss att bygga en modern och säker webblösning. Rekommenderas starkt!<br>- Anna L., VD på TechStart</div>
                <div class="Arrow"> </div>
            </div>
            <div class="User"><img src="user.png" alt="user"></div>
        </div>
        <div class="TextBubble">
            <div class="Bubble">
                <div class="Text">Otroligt professionella och levererade över våra förväntningar!<br>– Erik S., IT-chef på FinCorp</div>
                <div class="Arrow"> </div>
            </div>
            <div class="User"><img src="user.png" alt="user"></div>
        </div>
    </div>
    
    <div class="kontaktaoss" id="kontaktaoss" ">
        <form action="index.php" method="post">
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



<script>
    var element = document.getElementById("kontaktaoss");
    function Scroll() {
        element.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
    }

    var header = document.getElementById("Header");
    function ToTop() {
        header.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
    }

    function Tjenster() {
        window.location.href = "Tjenster.php";
    }
</script>

<?php 
    function sanitize($input){
        $input = stripslashes($input); 
        $input = htmlspecialchars($input);  
        $input = filter_var($input, FILTER_SANITIZE_STRING); 
        return $input;
    }
?>
</html>