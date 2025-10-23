document.addEventListener("DOMContentLoaded", () => {
    const main = document.getElementById("main-content");
    setTimeout(() => main.classList.add("show"), 100);

    document.querySelectorAll(".progress-bar-animate").forEach((bar, index) => {
        const value = bar.getAttribute("data-value");
        setTimeout(() => {
            bar.style.width = value + '%';
            bar.classList.add("show");
        }, 200 * (index+1));
    });
});
