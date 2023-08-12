window.addEventListener("blur", () => {
    document.title = "Come back :(";
})

window.addEventListener("focus", () => {
    document.title = "Watt Max";
})

function changeImage() {
    const image = document.getElementById('img-principale');
    const screenWidth = window.innerWidth;

    if (screenWidth <= 710) {
        image.src = "https://wattmax.fr/img/img/1_-_Logo_WM_Blanc_portrait__Cercle_bleu__-_Fond_noir-removebg-preview.png";
    } else {
        image.src = "https://wattmax.fr/img/23.02 - Logo Typo blanc.png";
    }
}
