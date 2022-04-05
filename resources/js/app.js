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

if (document.getElementById('toggleFilter')){
    document.getElementById('toggleFilter').addEventListener('click', function () {
        document.getElementById("toggleFilter").classList.toggle('rounded');
        document.getElementById("toggleFilter").classList.toggle('rounded-t');
        if (clicked === false || document.getElementById("filter").style.display === "none") {
            document.getElementById("filter").style.display = 'flex';
            document.getElementById("arrow-down").style.display = 'none';
            document.getElementById("arrow-up").style.display = 'block';
            clicked = true;
        } else {
            document.getElementById("filter").style.display = "none";
            document.getElementById("arrow-down").style.display = 'block';
            document.getElementById("arrow-up").style.display = 'none';
        }
    });
}

if (document.getElementById('timeClose')){
    setTimeout(function () {
        document.getElementById('timeClose').style.display = 'none';
    }, 2000);
}
