window.addEventListener("load", function () {
    const preloader = document.querySelector(".preloader");
    const progressText = document.getElementById("progress");
    const progressBar = document.querySelector(".progress");

    let progress = 0;
    const increment = 1; 

    let interval = setInterval(function () {
        progress += increment;
        progressText.textContent = progress;
        progressBar.style.width = progress + "%";

        if (progress >= 100) {
            clearInterval(interval);
            preloader.style.display = "none";
        }
    }, 20); 
});
