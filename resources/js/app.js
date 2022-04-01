require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var clicked = false;
if (document.getElementById('togglemenu')) {
    document.getElementById('togglemenu').addEventListener('click', function () {
        if (clicked === false || document.getElementById("nav").style.display === "none") {
            document.getElementById("nav").style.display = 'flex';
            clicked = true;
        } else {
            document.getElementById("nav").style.display = "none";
        }
    });
}

if (document.getElementById('close-box')) {
    document.getElementById('close-box').addEventListener('click', function () {
        document.getElementById("alert").style.display = "none";
    });
}
