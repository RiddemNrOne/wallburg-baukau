            document.addEventListener("DOMContentLoaded", () => {
                // Pfad der aktuellen Seite, z.B. /Pages/wif/equipment.php
                const path = window.location.pathname.toLowerCase();

                // Wenn der Pfad den /wif Ordner enthält
                if (path.includes("/wif/")) {
                    document.body.style.backgroundColor = "#FF5500"; // Rot/Orange Ton
                } else if (path.includes("/wb/")) {
                    document.body.style.backgroundColor = "#F4DAA7"; // Blau
                } else {
                    document.body.style.backgroundColor = "#F4DAA7"; // Blau
                }
            });