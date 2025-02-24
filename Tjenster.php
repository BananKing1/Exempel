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
        <h1>Vi erbjuder</h1>
        <h3>professionella webbdesign- och utvecklingstjänster för företag som vill skapa en stark digital närvaro.</h3>
    </div>

    <div class="Tjenster">
        <h1>Vad vi erbjuder</h1>
        <div class="boxes">
            <div class="box">Webbutveckling <br>–<br> Bygg kraftfulla och responsiva hemsidor.</div>
            <div class="box">IT-konsultation <br>–<br> Skräddarsydda IT-strategier för företag.</div>
            <div class="box">Anpassade hemsidor <br>-<br> Modern design och responsiv layout.</div>
        </div>
        <div class="boxes">
            <div class="box">Molnlösningar <br>–<br> Smidiga och säkra digitala lösningar.</div>
            <div class="box">Cybersäkerhet <br>–<br> Skydda din data med de senaste säkerhetslösningarna.</div>
            <div class="box">Flera programmerings språk <br>–<br> Utveckla hemsidor med HTML, CSS, JavaScript och PHP-utveckling.</div>
        </div>
        <div class="boxes">
            <div class="box">E-handelslösningar <br>–<br> byggda från grunden utan CMS.</div>
            <div class="box">Sökmotoroptimering (SEO) <br>-<br> för att förbättra synlighet på Google.</div>
            <div class="box">Reklam <br>–<br> Google Ads och sociala medier-annonsering.</div>
        </div>
        <div class="boxes">
            <div class="box">Support <br>–<br> Löpande uppdateringar och felsökning.</div>
            <div class="box">Databas utveckling <br>–<br> Webbhotell och domänhantering.</div>
        </div>
    </div>

    <div class="OmOss">
        <h1>Prissättning</h1>
        <p></p>

        <div class="Info">
            <div class="priser">
                <div class = "pris">
                    <h1>Webbdesign & Utveckling<br></h1>
                    <li>Enkel webbplats (1–5 sidor) → 5 000 – 15 000 kr</li>
                    <li>Mellanstor webbplats (6–15 sidor) → 15 000 – 35 000 kr</li>
                    <li>E-handelswebbplats (byggd från grunden utan CMS) → 30 000 – 80 000 kr</li>
                    <li>Skräddarsydd webbutveckling (komplexa funktioner) → 50 000+ kr</li>
                </div>
           
                <div class = "pris">
                    <h1>SEO & Digital Marknadsföring<br></h1>
                    <li>Grundläggande SEO-optimering → 3 000 – 10 000 kr</li>
                    <li>Löpande SEO (per månad) → 5 000 – 20 000 kr</li>
                    <li>Google Ads / Sociala medier annonsering → 10–20% av annonsbudgeten</li>
                </div>            

                <div class = "pris">
                    <h1>Underhåll & Support<br></h1>
                    <li>Mindre uppdateringar & felsökning → 500 – 1 500 kr/timme</li>
                    <li>Månadsabonnemang (inkl. hosting, säkerhet, backup) → 1 000 – 5 000 kr/mån</li>
                </div>
            </div>
        </div>
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
        <h1>Kontakta oss idag för att diskutera ditt projekt!<br><br></h1>
        <form action="Index.php" method="post">
            <input type="text" name="Name" placeholder="Namn">
            <input type="text" name="Ämne" placeholder="Ämne">
            <input type="text" name="Epost" placeholder="Epost">
            <input type="text" name="Frågor" placeholder="Detaljer för projektet">
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