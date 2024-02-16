function toggleLanguage(language) {
    let language_cap = document.getElementById("language_cap");
    event.preventDefault();
    if (language === "RU") {
        language_cap.innerHTML = "RU";
        localStorage.setItem('preferredLanguage', language);
    }
    else {
        language_cap.innerHTML = "EN";
        localStorage.setItem('preferredLanguage', language);
    }
}
// Проверяем, есть ли предпочтительный язык в локальном хранилище при загрузке страницы
document.addEventListener("DOMContentLoaded", function (event) {
    let preferredLanguage = localStorage.getItem('preferredLanguage');
    if (preferredLanguage) {
        // Если есть, то применяем предпочтительный язык
        toggleLanguage(preferredLanguage);
    }
});
