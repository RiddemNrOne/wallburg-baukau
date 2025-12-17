<?php

// 1️⃣ Der Ordner, in dem alle Unterseiten gespeichert sind
$page_dir = 'pages';

// 2️⃣ Die aktuelle Adresse (z.B. /produkte/stuehle) wird in kleine Stücke zerlegt

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_path = explode('/', rtrim(ltrim(strtolower($path), '/'), '/'));


//Was tut der Server?
//echo "<pre>";
//print_r($_SERVER['REQUEST_URI']);
//print_r($uri_path);
//echo "</pre>";


// 3️⃣ Diese Funktion prüft, ob es zu dieser Adresse eine passende Datei gibt
function checkSite($root_path, $uri_path, &$site_file) {
   
    // Wenn nichts mehr in der Adresse übrig ist (also z. B. nur die Hauptseite aufgerufen wurde)
    if (empty($uri_path)) {
        // Prüfe, ob im aktuellen Ordner eine index.php existiert
        if (file_exists($root_path . '/index.php')) {
            $site_file = $root_path . '/index.php'; // Dann ist das unsere Seite
            return true;
        }
        return false; // Nichts gefunden
    }

    // Nimm das erste Wort aus der Adresse (z.B. "produkte")
//    $dir = array_shift($uri_path);
//    $path = $root_path . '/' . $dir;

    $path = $root_path . '/' . implode('/', $uri_path);
    $file = $path . '.php';

    if (file_exists($file)) {
        $site_file = $file;
        return true;
    }
   
    $file = $path . '.html';

    //echo $file; exit;
    if (file_exists($file)) {
        $site_file = $file;
        return true;
    }    


    // Prüfe, ob es im passenden Ordner eine index.php gibt
    if (file_exists($path . '/index.php')) {
        $site_file = $path . '/index.php'; // Dann nimm diese Datei
        return true;

    // Wenn es ein Ordner ist, geh tiefer hinein (rekursiv bedeutet: ruf die Funktion nochmal auf)
    } else /* elseif (is_dir($path)) {
        return checkSite($path, $uri_path, $site_file);
    } */

    return false; // Wenn nichts passt, gib "nicht gefunden" zurück
}


// 4️⃣ Wenn keine Unterseite in der URL steht (also Startseite)
if((count($uri_path) == 1) && ($uri_path[0] == '')) {
    $site_file = 'pages/index-body.php'; // Zeig die Startseite an



// 5️⃣ Wenn checkSite keine passende Seite findet → Fehlerseite (404)
} else if (!checkSite($page_dir, $uri_path, $site_file)) {
    header('HTTP/1.0 404 Not Found');
    echo "<pre>";
    var_dump($uri_path);
    echo "</pre>";
    $site_file = '404.php';
}


// 6️⃣ Jetzt werden alle Teile der Webseite eingebunden (wie Puzzleteile)
if (!isset($_GET['inner'])) {
    include('php-snippets/start.php');  // HTML-Anfang
    include('php-snippets/nav.php');    // Navigation
}

// Hier würde eigentlich die gefundene Seite angezeigt werden:
    echo "<!-- Geladene Seite: $site_file -->";

    include($site_file);

if (!isset($_GET['inner'])) {
    include('php-snippets/footer.php'); // Fußzeile
    include('php-snippets/script.php'); // JavaScript etc.
    include('php-snippets/end.php');    // HTML-Ende
}
?>
