// function toggleLanguage(language) {
//     let language_cap = document.getElementById("language_cap");
//     event.preventDefault();
//     if (language === "RU") {
//         language_cap.innerHTML = "RU";
//         localStorage.setItem('preferredLanguage', language);
//     }
//     else {
//         language_cap.innerHTML = "EN";
//         localStorage.setItem('preferredLanguage', language);
//     }
// }
// // Проверяем, есть ли предпочтительный язык в локальном хранилище при загрузке страницы
// document.addEventListener("DOMContentLoaded", function (event) {
//     let preferredLanguage = localStorage.getItem('preferredLanguage');
//     if (preferredLanguage) {
//         // Если есть, то применяем предпочтительный язык
//         toggleLanguage(preferredLanguage);
//     }
// });

// Объект с переводами
const translations = {
    'EN': {
        'language_cap': 'EN',
        'agency': 'Real Estate Agency',
        'h1_title': 'Buying and renting real estate in Phuket',
        'h1_about': 'We are the agency that does this'
    },
    'RU': {
        'language_cap': 'RU',
        'agency': 'Агенство недвижимости',
        'h1_title': 'Покупка и аренда недвижимости на Пхукете',
        'h1_about': 'Мы агенство, которое занимается этим'
    }
};

// Функция для переключения языка
function toggleLanguage(language) {
    let language_cap = document.getElementById("language_cap");
    let agency = document.getElementById("agency");
    let h1_title = document.getElementById("h1_title");
    let h1_about = document.getElementById("h1_about");

    // Применяем переводы для каждого элемента
    for (let key in translations[ language ]) {
        let element = document.getElementById(key);
        if (element) {
            element.innerHTML = translations[ language ][ key ];
        }
    }

    // Сохраняем выбранный язык в локальном хранилище
    localStorage.setItem('preferredLanguage', language);
}

// Проверяем, есть ли предпочтительный язык в локальном хранилище при загрузке страницы
document.addEventListener("DOMContentLoaded", function (event) {
    let preferredLanguage = localStorage.getItem('preferredLanguage');
    if (preferredLanguage) {
        // Если есть, то применяем предпочтительный язык
        toggleLanguage(preferredLanguage);
    }
});