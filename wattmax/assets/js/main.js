var title = document.title;

window.addEventListener("blur", () => {
    document.title = "Come back :(";
})

window.addEventListener("focus", () => {
    document.title = title;
})
