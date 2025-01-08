<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Wallburg Baukau</title>
    <meta name="author" content="Johannes Bokelmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ico64.ico" rel="shortcut icon" type="image/x-icon">
    <link href="wb.png" rel="icon" sizes="482x631" type="image/png">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="WB.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="wb.panel.min.js"></script>
    <script src="wwb15.min.js"></script>
    <script>
    $(document).ready(function() {
        // Smooth scrolling to anchors
        $("a[href*='#PageHeader']").click(function(event) {
            event.preventDefault();
            $('html, body').stop().animate({ scrollTop: $('#wb_PageHeader').offset().top - 100 }, 600, 'swing');
        });
    });
    </script>
</head>
<body>
    <!-- Header -->
    <div id="wb_PageHeader">
        <section id="PageHeader">
            <h1>Willkommen bei Wallburg Baukau</h1>
        </section>
    </div>

    <!-- Navigation -->
    <nav id="wb_PanelMenu2">
        <ul role="menu">
            <li role="menuitem"><a href="./index.php" class="active"><i class="fa fa-home fa-fw"></i> Wallburg Baukau</a></li>
            <li role="menuitem"><a href="./gruppe.php"><i class="fa fa-user fa-fw"></i> Das sind wir</a></li>
            <li role="menuitem"><a href="./termine.php"><i class="fa fa-calendar-check-o fa-fw"></i> Unsere Termine</a></li>
            <li role="menuitem"><a href="./ausrüstung.php"><i class="fa fa-cubes fa-fw"></i> Die Ausrüstung</a></li>
            <li role="menuitem"><a href="./historisches.php"><i class="fa fa-graduation-cap fa-fw"></i> Historisches</a></li>
            <li role="menuitem"><a href="./social.php"><i class="fa fa-camera fa-fw"></i> Social Media</a></li>
            <li role="menuitem"><a href="./wif/feuer.php"><i class="fa fa-thermometer-full fa-fw"></i> Wallburg in Flammen</a></li>
            <li role="menuitem"><a href="./impressum.php"><i class="fa fa-hashtag fa-fw"></i> Impressum</a></li>
        </ul>
    </nav>

    <!-- Hauptinhalt -->
    <main>
        <section>
            <h2>Über uns</h2>
            <p>
                Historisch belegt, gab es in der Nähe unseres Wohnortes, im 13. Jahrhundert, eine Wallburg. So war der Name unserer Mittelaltergruppe schnell gefunden, “Wallburg Baukau”!<br>
                Wir, das ist eine 5-köpfige Familie und ein paar Freunde, versuchen das Leben um 1360 nachzustellen. Lagerleben, Dengeln, ein wenig Schwertkampf und vor allem des Abends Feuerspiele.
            </p>
        </section>
        <section>
            <h2>Unsere Gruppe</h2>
            <!-- <img src="images/gruppe.jpg" alt="Gruppe Wallburg Baukau" style="width:100%; max-width:600px;"> -->
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Johannes Bokelmann. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>
