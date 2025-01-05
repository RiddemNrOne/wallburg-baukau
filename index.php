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
    $(document).ready(function()
    {
       $("a[href*='#PageHeader']").click(function(event)
       {
          event.preventDefault();
          $('html, body').stop().animate({ scrollTop: $('#wb_PageHeader').offset().top-100 }, 600, 'swing');
       });
    });
    </script>
</head>
<body>
    <?php
    // Dynamische Inhalte könnten hier eingebunden werden.
    echo '<div id="wb_PageHeader">';
    echo '<section id="PageHeader">';
    echo '<h1>Willkommen bei Wallburg Baukau</h1>';
    echo '</section>';
    echo '</div>';
    ?>
    <div id="FlexContainer1">
        <!-- Dein HTML-Inhalt -->
    </div>
</body>
</html>
