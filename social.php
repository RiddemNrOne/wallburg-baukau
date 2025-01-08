<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Wallburg Baukau: Social Media</title>
    <meta name="author" content="Johannes Bokelmann">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ico64.ico" rel="shortcut icon" type="image/x-icon">
    <link href="wb.png" rel="icon" sizes="482x631" type="image/png">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="WB.css" rel="stylesheet">
    <link href="social.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="wb.panel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a[href*='#PageHeader']").click(function(event) {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#wb_PageHeader').offset().top-100 }, 600, 'swing');
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

            $("a[href*='#LayoutGrid3']").click(function(event) {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid3').offset().top-100 }, 600, 'swing');
            });

            $("a[href*='#LayoutGrid2']").click(function(event) {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid2').offset().top-100 }, 600, 'swing');
            });

            $("a[href*='#LayoutGrid6']").click(function(event) {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid6').offset().top-100 }, 600, 'swing');
            });

            $("a[href*='#LayoutGrid5']").click(function(event) {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid5').offset().top-100 }, 600, 'swing');
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
                                <li role="menuitem"><a href="./ausrüstung.php"><i class="fa fa-cubes fa-fw"></i><span>Die Ausrüstung</span></a></li>
                                <li role="menuitem"><a href="./historisches.php"><i class="fa fa-graduation-cap fa-fw"></i><span>Historisches</span></a></li>
                                <li role="menuitem"><a href="./social.php" class="active"><i class="fa fa-camera fa-fw"></i><span>Social Media</span></a></li>
                                <li role="menuitem"><a href="./wif/feuer.php"><i class="fa fa-thermometer-full fa-fw"></i><span>Wallburg in Flammen</span></a></li>
                                <li role="menuitem"><a href="./wif/spieler.php"><i class="fa fa-users fa-fw"></i><span>- Feuerspieler</span></a></li>
                                <li role="menuitem"><a href="./wif/spielzeug.php"><i class="fa fa-gamepad fa-fw"></i><span>- Spielzeug</span></a></li>
                                <li role="menuitem"><a href="./wif/ausrüstung.php"><i class="fa fa-fire-extinguisher fa-fw"></i><span>- Ausrüstung</span></a></li>
                                <li role="menuitem"><a href="./impressum.php"><i class="fa fa-hashtag fa-fw"></i><span>Impressum</span></a></li>
                                <li role="menuitem"><a href="./privat/privat.php"></a></li>
                                <li role="menuitem"><a href="https://www.wallburg-baukau.de/alte%20webseite/Index.htm"></a></li>
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

    <div id="wb_LayoutGrid3">
        <div id="LayoutGrid3">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-2">
                    <div id="wb_Text2">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">Fotos, Videos und mehr posten wir auf diesen Plattformen, so könnt ihr sehen was wir machen und uns auch am einfachsten erreichen.</span>
                    </div>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid2">
        <div id="LayoutGrid2">
            <div class="row">
                <div class="col-1">
                    <div id="wb_Image3" style="display:inline-block;width:100%;height:auto;z-index:7;">
                        <a href="https://www.facebook.com/Wallburg-Baukau-112373272431611/" target="_blank">
                            <img src="https://www.facebook.com/images/fb_icon_325x325.png" id="Image3" alt="" title="Facebook: Wallburg Baukau">
                        </a>
                    </div>
                    <div id="wb_Text4">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">Facebook: Wallburg Baukau</span>
                    </div>
                </div>
                <div class="col-2">
                    <div id="wb_Image7" style="display:inline-block;width:100%;height:auto;z-index:9;">
                        <a href="https://www.youtube.com/channel/UCuLClszNaKODgN-iLseoQpg" target="_blank">
                            <img src="https://lh3.googleusercontent.com/lMoItBgdPPVDJsNOVtP26EKHePkwBg-PkuY9NOrc-fumRtTFP4XhpUNk_22syN4Datc" id="Image7" alt="" title="YouTube: Wallburg in Flammen">
                        </a>
                    </div>
                    <div id="wb_Text6">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">YouTube: Wallburg in Flammen</span><br>
                        <span style="color:#000000;font-family:Arial;font-size:16px;">(Jeden Samstag ein neues Video)</span>
                    </div>
                </div>
                <div class="col-3">
                    <div id="wb_Image4" style="display:inline-block;width:100%;height:auto;z-index:11;">
                        <a href="https://www.facebook.com/WallburgInFlammen/" target="_blank">
                            <img src="https://www.facebook.com/images/fb_icon_325x325.png" id="Image4" alt="" title="Facebook: Wallburg in Flammen">
                        </a>
                    </div>
                    <div id="wb_Text5">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">Facebook: Wallburg in Flammen</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid6">
        <div id="LayoutGrid6">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-2">
                    <div id="wb_Text8">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">Wenn ihr uns Kontaktieren wollt:</span>
                    </div>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </div>

    <div id="wb_LayoutGrid5">
        <div id="LayoutGrid5">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-2">
                    <div id="wb_Text7">
                        <span style="color:#000000;font-family:Arial;font-size:19px;">Kontaktadresse: <br>
                            <span style="font-size:13px;">E-Mail: kontakt@wallburg-baukau.de<br>Telefon: 0123456789</span>
                        </span>
                    </div>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
