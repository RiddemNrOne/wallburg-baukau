document.getElementById("door-wrapper").addEventListener("click", () => {
    const left = document.querySelector(".left-door");
    const right = document.querySelector(".right-door");
    const content = document.getElementById("main-content");

    // Türen öffnen
    left.classList.add("open");
    right.classList.add("open");

    // Nach kurzer Zeit Content einblenden
    setTimeout(() => {
        content.classList.remove("d-none");
        content.classList.add("show");
    }, 800);

    // Danach Klick deaktivieren (damit Türen nicht mehrfach versuchen zu öffnen)
    document.getElementById("door-wrapper").style.pointerEvents = "none";

    // Türen ganz verschwinden lassen, wenn sie fertig rotiert sind
    setTimeout(() => {
        document.getElementById("door-wrapper").style.display = "none";
    }, 2600);
});
