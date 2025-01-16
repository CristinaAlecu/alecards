<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitație Florin și Gabriela Bucur</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Florin & Gabriela</h1></li>
        <nav>
            <ul>
                <li><a href="#">Salvează data</a></li>
                <li><a href="#nunta">Detalii</a></li>
                <li><a href="#locatii">Locații</a></li>
                <li><a href="#rsvp">Confirmă</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <!--sectiunea 1-->
        <div class="salveaza-data">
            <img src="images/foto2.jpg" alt="Noi doi">
            <p>22 August 2025</p>
        </div>

        <div class="countdown">
            <div class="time-unit">
                <span id="days"></span><br>Zile
            </div>
            <div class="time-unit">
                <span id="hours"></span><br>Ore
            </div>
            <div class="time-unit">
                <span id="minutes"></span><br>Min
            </div>
            <div class="time-unit">
                <span id="seconds"></span><br>Sec
            </div>
        </div>

        <!--sectiunea 2-->
        <section id="nunta">
            <h2>Premieră mondială!</h2>
            <p>În rolurile principale: </p>
            <p>Ginerele <span style="color:#0b8107">Florin</span> (fostul Casanova al orașului)</p>
            <p>Și Mireasa <span style="color:#0b8107">Gabriela</span> (e sofisticată, mă)</p>
            <p>În rolurile secundare: nașii <span style="color:#0b8107">Florin și Ana Ciopec</span></p>
            <p>0 nuntă în regia socrilor mari: <span style="color:#0b8107">Vasile și Georgeta Bucur</span></p>
            <p>Și a socrilor mici: <span style="color:#0b8107">Alexandru și Florentina Antonescu</span></p>
            <p>Invitat de onoare: <span style="color:#0b8107">Tu!</span></p>
        </section>

        <!--sectiune 3--> 
        <section id="locatii">
            <img src="images/yes.png" alt="I said yes!">
            <h2>Locații</h2>
            <h3>Actul 1: Cununia religioasă</h3>
            <p>Prima parte a evenimentului are loc la <span style="color:#0b8107">Parohia Nașterea Maicii Domnului</span> din Slobozia (Str. Vechea Matca, 1, Slobozia, Ialomita), orele <span style="color:#0b8107">18:00</span>, unde mergem pentru a primi undă verde de la Studiourile Divine de producție.</p>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5685.332560692064!2d27.353738865398366!3d44.56293442808775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b0519e213dc37d%3A0xeb25c3d76c303596!2sPAROHIA%20NA%C5%9ETEREA%20MAICII%20DOMNULUI!5e0!3m2!1sro!2sro!4v1736266347335!5m2!1sro!2sro" 
                class="custom-map" allowfullscreen>
                </iframe>
            </div>
            <h3>Actul 2: Petrecerea</h3>
            <p>Apoi cu covor roșu și tratament de VIP să petreci alături de noi la <span style="color:#0b8107">Taboo Events Slobozia</span> (Strada Polivalentă nr.6, Slobozia, Ialomița), Sala Opera, orele 20:00!</p>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11371.132189851123!2d27.352651654011098!3d44.560544677572885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b05196d159f1cf%3A0x390926f10b670d33!2sTaboo%20Events!5e0!3m2!1sro!2sro!4v1725366584983!5m2!1sro!2sro"
                class="custom-map" allowfullscreen>
                </iframe>
            </div>
        </section>

        <!--sectiune 4--> 
        <section id="rsvp">     
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @else
                <h2>Vino și tu alături de noi!</h2>
                <!-- Formularul RSVP -->
                <form method="POST" action="{{ route('invitation.rsvp') }}">
                    @csrf
                    <div class='label-area'>
                        <label for="prezenta">Vei participa?</label>
                        <select name="prezenta" id="prezenta" required>
                            <option value="1">Da</option>
                            <option value="0">Nu</option>
                        </select>
                    </div>
                    <div class='label-area'>
                        <label for="nume">Numele tău complet:</label>
                        <input type="text" id="nume" name="nume" placeholder="Numele aici..." required>
                    </div>
                    <div class='label-area'>
                        <label for="persoane">Număr de persoane:</label>
                        <input type="number" id="persoane" name="persoane">
                    </div>
                    <div class='label-area'>
                        <label for="copii">Număr de copii:</label>
                        <input type="number" id="copii" name="copii">
                    </div>
                    <div class='mesaj-area'>
                        <label for="mesaj">Ne poți trimite un mesaj:</label>   
                        <textarea id="mesaj" name="mesaj" placeholder="Exemplu: Nu vrem meniu special pentru copil/copii. Dar aș vrea un scaun la masă pentru el/ei"></textarea>
                    </div>

                    <button type="submit" class='btn'>Trimite confirmarea</button>
                </form>
            @endif
        </section>

        <!--sectiune 5--> 
        <section>
            <div class="datele-noastre">
                <img src="images/flori.png" alt="buchet">
                <p>Dacă încă nu esti hotărât, ne poți contacta la numerele de telefon de mai jos până la data de 01 August 2025!</p>
                <p>Florin - 0720.862.917</p>
                <p>Gabriela - 0720.862.918</p>
            </div>
        </section>
    </div>

<script>
// script.js
// Data țintă
var countDownDate = new Date("Aug 22, 2025 10:00:00").getTime();

// Actualizarea countdown-ului la fiecare secundă
var x = setInterval(function() {

    // Obținerea datei și orei curente
    var now = new Date().getTime();

    // Calcularea distanței dintre data țintă și data curentă
    var distance = countDownDate - now;

    // Calcularea timpului rămas în zile, ore, minute și secunde
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Afișarea rezultatelor în elementele HTML corespunzătoare
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // Dacă countdown-ul a expirat, afișează un mesaj
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Premiera a început!";
    }
}, 1000);
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>
