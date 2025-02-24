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
            <button type="button" onclick="Kontakta()">Kontakta Oss</button>
        </nav>
    </div> 

    <div class="Hero_Section">
        <h1>Vi bygger framtidens digitala lösningar</h1>
        <h3>NordicTech Solutions är ett innovativt IT-konsultföretag som hjälper företag att växa genom smarta teknologiska lösningar. Med fokus på innovation, säkerhet och kundanpassning skapar vi digitala möjligheter för företag i alla branscher.</h3>
    </div>

    <div class="Tjenster">
        <h1>Vår resa & vision</h1>
        <div class="boxes">
            Grundat med en passion för teknik och digital utveckling, har NordicTech Solutions vuxit till att bli en pålitlig partner för företag som vill framtidssäkra sin verksamhet. Vår vision är att vara ledande inom digital innovation genom att leverera säkra, smarta och skräddarsydda IT-lösningar.
        </div>
    </div>

    <div class="OmOss">
        <h1>Vad vi står för</h1>
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


    <div class="VårTeam">
        <h1>Möt vår team<br><br></h1>
        <div class="TextBubble">
            <div class="User"><img src="./Anställd/Johan_Andersson.webp" alt="Johan Andersson"></div>
            <div class="filler"> </div>
            <div class="Bubble">
                <div class="Text">Johan Andersson <br>–<br> Grundare & VD, expert inom IT-strategi</div>
            </div>
        </div>
        <div class="TextBubble">
            <div class="User"><img src="./Anställd/Emma_Karlsson.webp" alt="user"></div>
            <div class="filler"> </div>
            <div class="Bubble">
                <div class="Text">Emma Karlsson <br>–<br> Lead Developer, specialist på webbutveckling</div>
            </div>
        </div>
        <div class="TextBubble">
            <div class="User"><img src="./Anställd/Ali_Hassan.webp" alt="user"></div>
            <div class="filler"> </div>
            <div class="Bubble">
                <div class="Text">Ali Hassan <br>–<br> Cybersäkerhetsexpert</div>
            </div>
        </div>

    </div>

    <div class="Recensioner">
        <h1>Det här säger våra kunder<br><br></h1>
        <div class="TextBubble">
            <div class="Bubble">
                <div class="Text">NordicTech Solutions hjälpte oss att utveckla en säker och effektiv webbplattform. Vi är supernöjda! <br>–<br> Maria L., VD på FinTech AB</div>
                <div class="Arrow"> </div>
            </div>
            <div class="User"><img src="user.png" alt="user"></div>
        </div>
        <div class="TextBubble">
            <div class="Bubble">
                <div class="Text">Deras expertis inom IT-säkerhet är ovärderlig. Vi känner oss trygga med deras lösningar! <br>–<br> Anders S., IT-chef på GlobalCorp</div>
                <div class="Arrow"> </div>
            </div>
            <div class="User"><img src="user.png" alt="user"></div>
        </div>
    </div>

    <div class="AnsökJobb">
        <h1>Vill du jobba med oss?</h1>
        <h3>Vi letar alltid efter nya spännande projekt och samarbeten. Hör av dig så tar vi en pratstund om hur vi kan hjälpa ditt företag att växa digitalt!</h3>
        <button type="button" onclick="Kontakta()">Kontakta Oss</button>
        </div>
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
    function Kontakta() {
        window.location.href = "KontaktaOss.php";

    }

    var header = document.getElementById("Header");
    function ToTop() {
        header.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
    }
</script>
