<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Wallburg Baukau: Das sind wir</title>
    <meta name="author" content="Vincent Kreße">
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
        $(document).ready(function () {
            $("a[href*='#PageHeader']").click(function (event) {
                event.preventDefault();
                $('html, body').stop().animate({scrollTop: $('#wb_PageHeader').offset().top - 100}, 600, 'swing');
            });
            $("#PanelMenu2").panel({
                animate: true,
                animationDuration: 200,
                animationEasing: 'linear',
                dismissible: true,
                display: 'overlay',
                position: 'left',
                toggle: true,
                overlay: true
            });
        });
    </script>
</head>

<body>
    <div id="wb_PageHeader">
        <section id="PageHeader">
            <div class="row">
                <div class="col-1">
                    <div id="wb_PanelMenu2" style="display:inline-block;width:63px;height:70px;z-index:0;">
                        <a href="#PanelMenu2_markup" id="PanelMenu2">&nbsp;</a>
                        <div id="PanelMenu2_markup">
                            <ul role="menu">
                                <li role="menuitem"><a href="./index.php"><i class="fa fa-home fa-fw"></i><span>Wallburg Baukau</span></a></li>
                                <li role="menuitem"><a href="./gruppe.php" class="active"><i class="fa fa-user fa-fw"></i><span>Das sind wir</span></a></li>
                                <li role="menuitem"><a href="./termine.php"><i class="fa fa-calendar-check-o fa-fw"></i><span>Unsere Termine</span></a></li>
                                <li role="menuitem"><a href="./ausrüstung.php"><i class="fa fa-cubes fa-fw"></i><span>Die Ausrüstung</span></a></li>
                                <li role="menuitem"><a href="./historisches.php"><i class="fa fa-graduation-cap fa-fw"></i><span>Historisches</span></a></li>
                                <li role="menuitem"><a href="./social.php"><i class="fa fa-camera fa-fw"></i><span>Social Media</span></a></li>
                                <li role="menuitem"><a href="./wif/feuer.php"><i class="fa fa-thermometer-full fa-fw"></i><span>Wallburg in Flammen</span></a></li>
                                <li role="menuitem"><a href="./wif/spieler.php"><i class="fa fa-users fa-fw"></i><span>- Feuerspieler</span></a></li>
                                <li role="menuitem"><a href="./wif/spielzeug.php"><i class="fa fa-gamepad fa-fw"></i><span>- Spielzeug</span></a></li>
                                <li role="menuitem"><a href="./wif/ausrüstung2.php"><i class="fa fa-fire-extinguisher fa-fw"></i><span>- Ausrüstung</span></a></li>
                                <li role="menuitem"><a href="./impressum.php"><i class="fa fa-hashtag fa-fw"></i><span>Impressum</span></a></li>
                                <li role="menuitem"><a href="./privat/privat.php"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:1;">
                        <!-- Hier können später Bilder eingefügt werden -->
                    </div>
                </div>
                <div class="col-3">
                    <div id="wb_Image2" style="display:inline-block;width:68px;height:88px;z-index:2;">
                        <!-- Bild für das Logo -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="wb_LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="wb_Image9" style="display:inline-block;width:100%;height:auto;z-index:6;">
                    <!-- Bild für Ralf Herzog zu Baukau -->
                </div>
            </div>
            <div class="col-2">
                <h1>Ralf Herzog zu Baukau</h1>
                <p>In der Gruppe stelle ich den Herzog zu Baukau Graf von Crange dar.</p>
                <a href="./wir/gruppe2.php"><img src="images/img0001.png" alt="weiter"></a>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid4">
        <div class="row">
            <div class="col-1">
                <div id="wb_Image4" style="display:inline-block;width:100%;height:auto;z-index:11;">
                    <!-- Bild für Bettina Freifrau von Rabenstedt -->
                </div>
            </div>
            <div class="col-2">
                <h1>Bettina Freifrau von Rabenstedt</h1>
                <p>In der Gruppe stelle ich die Frau des Ritters von Rabenstedt dar.<br>Lageraufgaben: Mädchen für alles.</p>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="wb_Image5" style="display:inline-block;width:100%;height:auto;z-index:15;">
                    <!-- Bild für Christian der Söldner -->
                </div>
            </div>
            <div class="col-2">
                <h1>Christian der Söldner</h1>
                <p>Ich bin im Lager der Söldner und mache alles, was im Lager so ansteht.</p>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid3">
        <div class="row">
            <div class="col-1">
                <div id="wb_Image3" style="display:inline-block;width:100%;height:auto;z-index:19;">
                    <!-- Bild für Knappe Vincent Erbgraf zu Börnig -->
                </div>
            </div>
            <div class="col-2">
                <h1>Knappe Vincent Erbgraf zu Börnig</h1>
                <p>Der junge Erbgraf zu Börnig wünschte seine Ausbildung zum Ritter bei Graf Tobijah le Brun de Carbonne.</p>
            </div>
        </div>
    </div>
</body>
</html>
