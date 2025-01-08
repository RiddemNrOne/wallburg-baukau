<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Wallburg Baukau: Ausrüstung</title>
    <meta name="author" content="Johannes Bokelmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ico64.ico" rel="shortcut icon" type="image/x-icon">
    <link href="wb.png" rel="icon" sizes="482x631" type="image/png">
    <link href="wb.png" rel="icon" sizes="482x631" type="image/png">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="WB.css" rel="stylesheet">
    <link href="ausrüstung.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="wb.panel.min.js"></script>
    <script>
        $(document).ready(function () {
            $("a[href*='#PageHeader']").click(function (event) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: $('#wb_PageHeader').offset().top - 100
                }, 600, 'swing');
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
                                <li role="menuitem"><a href="./gruppe.php"><i class="fa fa-user fa-fw"></i><span>Das sind wir</span></a></li>
                                <li role="menuitem"><a href="./termine.php"><i class="fa fa-calendar-check-o fa-fw"></i><span>Unsere Termine</span></a></li>
                                <li role="menuitem"><a href="./ausrüstung.php" class="active"><i class="fa fa-cubes fa-fw"></i><span>Die Ausr&#252;stung</span></a></li>
                                <li role="menuitem"><a href="./historisches.php"><i class="fa fa-graduation-cap fa-fw"></i><span>Historisches</span></a></li>
                                <li role="menuitem"><a href="./social.php"><i class="fa fa-camera fa-fw"></i><span>Social Media</span></a></li>
                                <li role="menuitem"><a href="./wif/feuer.php"><i class="fa fa-thermometer-full fa-fw"></i><span>Wallburg in Flammen</span></a></li>
                                <li role="menuitem"><a href="./wif/spieler.php"><i class="fa fa-users fa-fw"></i><span>- Feuerspieler</span></a></li>
                                <li role="menuitem"><a href="./wif/spielzeug.php"><i class="fa fa-gamepad fa-fw"></i><span>- Spielzeug</span></a></li>
                                <li role="menuitem"><a href="./wif/ausrüstung2.php"><i class="fa fa-fire-extinguisher fa-fw"></i><span>- Ausr&#252;stung</span></a></li>
                                <li role="menuitem"><a href="./impressum.php"><i class="fa fa-hashtag fa-fw"></i><span>Impressum</span></a></li>
                                <li role="menuitem"><a href="./privat/privat.php"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:1;">
                        <img src="images/Wallburg Baukau Titel.png" id="Image1" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div id="wb_Image2" style="display:inline-block;width:68px;height:88px;z-index:2;">
                        <img src="images/wb klein.png" id="Image2" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="wb_LayoutGrid9">
        <div id="LayoutGrid9">
            <div class="row">
                <div class="col-1">
                    <div class="col-1-padding">
                        <div id="wb_Image15" style="display:inline-block;width:100%;height:auto;z-index:6;">
                            <img src="images/gruppe.jpg" id="Image15" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-2-padding">
                        <div id="wb_Heading2" style="display:inline-block;width:100%;z-index:7;">
                            <h1 id="Heading2">Zelte</h1>
                        </div>
                        <div id="wb_Text17">
                            <span style="color:#000000;">Informationen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid1">
        <div id="LayoutGrid1">
            <div class="row">
                <div class="col-1">
                    <div class="col-1-padding">
                        <div id="wb_Image3" style="display:inline-block;width:100%;height:auto;z-index:9;">
                            <img src="images/gruppe.jpg" id="Image3" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-2-padding">
                        <div id="wb_Heading1" style="display:inline-block;width:100%;z-index:10;">
                            <h1 id="Heading1">Truhen</h1>
                        </div>
                        <div id="wb_Text1">
                            <span style="color:#000000;">Informationen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
