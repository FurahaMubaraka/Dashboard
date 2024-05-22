var indexx = 0;
var directionn = 1;

var names = document.getElementById('Coder');
var coderchange = ["Graphic Designer", "Developer", "Professional", "Freelancer", "Coder", "......"];

function coder() {
    names.innerHTML = coderchange[indexx];
    indexx += directionn;

    if (indexx === coderchange.length || indexx === 0) {
        directionn *= -1;
    }
}
coder();
setInterval(coder, 6000);
