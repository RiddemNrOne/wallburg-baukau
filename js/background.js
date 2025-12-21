document.addEventListener("DOMContentLoaded", () => {
    const path = window.location.pathname.toLowerCase();

    if (path.includes("/wif/")) {
        document.body.style.backgroundColor = "#1a0d08";
    } else if (path.includes("/wb/")) {
        document.body.style.backgroundColor = "#F4DAA7";
    } else {
        document.body.style.backgroundColor = "#F4DAA7";
    }
});