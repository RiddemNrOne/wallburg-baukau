<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Wallburg Baukau: Das sind wir</title>
    <meta name="author" content="Johannes Bokelmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ico64.ico" rel="shortcut icon" type="image/x-icon">
    <link href="wb.png" rel="icon" sizes="482x631" type="image/png">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="WB.css" rel="stylesheet">
    <link href="gruppe.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="wb.panel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a[href*='#PageHeader']").click(function(event) {
                event.preventDefault();
                $('html, body').animate({ scrollTop: $('#wb_PageHeader').offset().top - 100 }, 600);
            });
            $("#PanelMenu2").panel({ animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'overlay', position: 'left', toggle: true, overlay: true });
        });
    </script>
</head>
<body>
    <header id="wb_PageHeader">
        <section id="PageHeader" class="row">
            <div class="col-1">
                <nav id="wb_PanelMenu2">
                    <a href="#PanelMenu2_markup" id="PanelMenu2">&nbsp;</a>
                    <ul id="PanelMenu2_markup" role="menu">
                        <li role="menuitem"><a href="./index.php"><i class="fa fa-home fa-fw"></i>Wallburg Baukau</a></li>
                        <li role="menuitem"><a href="./gruppe.php" class="active"><i class="fa fa-user fa-fw"></i>Das sind wir</a></li>
                        <li role="menuitem"><a href="./termine.php"><i class="fa fa-calendar-check-o fa-fw"></i>Unsere Termine</a></li>
                        <li role="menuitem"><a href="./ausrüstung.php"><i class="fa fa-cubes fa-fw"></i>Die Ausrüstung</a></li>
                        <li role="menuitem"><a href="./historisches.php"><i class="fa fa-graduation-cap fa-fw"></i>Historisches</a></li>
                        <li role="menuitem"><a href="./social.php"><i class="fa fa-camera fa-fw"></i>Social Media</a></li>
                        <li role="menuitem"><a href="./wif/feuer.php"><i class="fa fa-thermometer-full fa-fw"></i>Wallburg in Flammen</a></li>
                        <li role="menuitem"><a href="./impressum.php"><i class="fa fa-hashtag fa-fw"></i>Impressum</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-2">
                <img src="images/Wallburg Baukau Titel.png" alt="">
            </div>
            <div class="col-3">
                <img src="images/wb klein.png" alt="">
            </div>
        </section>
    </header>

    <section class="content">
        <div class="row">
            <div class="col-1">
                <img src="images/gruppe.jpg" alt="">
            </div>
            <div class="col-2">
                <h1>Ralf Herzog zu Baukau</h1>
                <p>In der Gruppe stelle ich den Herzog zu Baukau Graf von Crange dar.</p>
                <a href="./wir/gruppe2.php"><img src="images/img0001.png" alt="Mehr erfahren"></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1">
                <img src="images/gruppe - tina.png" alt="">
            </div>
            <div class="col-2">
                <h1>Bettina Freifrau von Rabenstedt</h1>
                <p>In der Gruppe stelle ich die Frau des Ritters von Rabenstedt dar.<br>Lageraufgaben: Mädchen für alles.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1">
                <img src="images/gruppe - chris.png" alt="">
            </div>
            <div class="col-2">
                <h1>Christian der Söldner</h1>
                <p>Ich bin im Lager der Söldner und mache alles, was im Lager so ansteht.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1">
                <img src="images/gruppe.jpg" alt="">
            </div>
            <div class="col-2">
                <h1>Knappe Vincent</h1>
                <p></p>
            </div>
        </div>
    </section>
</body>
</html>
