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
    'RU': {
        'language_cap': 'RU',
        'agency': 'Агенство недвижимости',
        'h1_title': 'Покупка и аренда недвижимости на Пхукете',
        'h1_about': 'Мы агенство, которое поможет Вам подобрать кондо, квартиру ил виллу на Пхукете',
        'h1_button': 'Узнать больше о нас',
        'gallery_category_1': 'Категории',
        'gallery_h2_1': 'Купить недвижимость',
        'gallery_description_1': 'На Пхукете можно подобрать квартиры и виллы на любой вкус',
        'dev_room': 'Квартиры от застройщиков',
        'goto_1': 'Перейти',
        'dev_villa': 'Виллы от застройщиков',
        'goto_2': 'Перейти',
        'owner_room': 'Квартиры от собственников',
        'goto_3': 'Перейти',
        'owner_villa': 'Виллы от собственников',
        'goto_4': 'Перейти',
        'land': 'Земельные участки',
        'goto_5': 'Перейти',
        'gallery_category_2': 'Категории',
        'gallery_h2_2': 'Арендовать недвижимость',
        'gallery_description_2': 'Аренда квартир и вилл на Пхукете доступна здесь',
        'rent_villa': 'Виллы от собственников',
        'goto_6': 'Перейти',
        'rent_room': 'Квартиры от cобственников',
        'goto_7': 'Перейти',
        'faq_q': 'Вопросы',
        'faq_faq': 'Часто задаваемые вопросы',
        'sell': 'ПРОДАЖА',
        'nav_dev_room': 'КВАРТИРЫ ОТ ЗАСТРОЙЩИКОВ',
        'nav_dev_villa': 'ВИЛЛЫ ОТ ЗАСТРОЙЩИКОВ',
        'nav_owner_room': 'КВАРТИРЫ ОТ СОБСТВЕННИКОВ',
        'nav_owner_villa': 'ВИЛЛЫ ОТ СОБСТВЕННИКОВ',
        'nav_land': 'ЗЕМЕЛЬНЫЕ УЧАСТКИ',
        'nav_rent': 'АРЕНДА',
        'nav_rent_room': 'КВАРТИРЫ ОТ СОБСТВЕННИКОВ',
        'nav_rent_villa': 'ВИЛЛЫ ОТ СОБСТВЕННИКОВ',
        'nav_about': 'О НАС',
        'nav_empl': 'СОТРУДНИКИ',
        'nav_contacts': 'КОНТАКТЫ',
        'why_choose': 'Почему Вы можете доверять нам?',
        'why_desc': 'С нами вы можете быть уверены в качественном обслуживании и индивидуальном подходе к вашим потребностям в недвижимости',
        'why_1': 'Качество услуг',
        'why_1_text': 'Наша компания отличается надежностью и ответственным подходом к каждому клиенту. Мы стремимся к профессионализму и постоянно совершенствуем качество предоставляемых услуг',
        'why_2': 'Опытные сотрудники',
        'why_2_text': 'В нашем агентстве работают только квалифицированные специалисты, имеющие богатый опыт в сфере недвижимости. Мы всегда готовы выслушать ваши потребности и предоставить индивидуальный подход к каждому клиенту',
        'why_3': 'Полная прозрачность',
        'why_3_text': 'Наше агентство стремится к полной прозрачности во всех сделках. Мы честно информируем наших клиентов о всех аспектах сделки и всегда придерживаемся высоких стандартов этики и профессионализма. Ваше доверие - наш приоритет!'
    },
    'EN': {
        'language_cap': 'EN',
        'agency': 'Real estate agency',
        'h1_title': 'Aquire and Rent real estate in Phuket',
        'h1_about': 'We are an agency that will help you find a condo, apartment or villa',
        'h1_button': 'See more about us',
        'gallery_category_1': 'Categories',
        'gallery_h2_1': 'Aquire Real Estate',
        'gallery_description_1': 'You can find condos and villas to suit any taste',
        'dev_room': 'Off-plan condos',
        'goto_1': 'See more',
        'dev_villa': 'Off-plan villas',
        'goto_2': 'See more',
        'owner_room': 'Resale condos',
        'goto_3': 'See more',
        'owner_villa': 'Resale villas',
        'goto_4': 'See more',
        'land': 'Land Plots',
        'goto_5': 'See more',
        'gallery_category_2': 'Categories',
        'gallery_h2_2': 'Rent Real Estate',
        'gallery_description_2': 'You can rent condos and villas on Phuket here',
        'rent_villa': 'Resale villas',
        'goto_6': 'See more',
        'rent_room': 'Resale condos',
        'goto_7': 'See more',
        'faq_q': 'Questions',
        'faq_faq': 'Frequently Asked Questions',
        'sell': 'FOR SALE',
        'nav_dev_room': 'OFF-PLAN CONDOS',
        'nav_dev_villa': 'OFF-PLAN VILLAS',
        'nav_owner_room': 'RESALE CONDOS',
        'nav_owner_villa': 'RESALE VILLAS',
        'nav_land': 'LAND PLOTS',
        'nav_rent': 'FOR RENT',
        'nav_rent_room': 'RESALE CONDOS',
        'nav_rent_villa': 'RESALE VILLAS',
        'nav_about': 'ABOUT US',
        'nav_empl': 'OUR TEAM',
        'nav_contacts': 'CONTACTS',
        'why_choose': 'Why choose us?',
        'why_desc': 'With us, you can be confident in the quality service and individual approach to your real estate needs',
        'why_1': 'Quality of services',
        'why_1_text': 'Our company stands out for its reliability and responsible approach to each client. We strive for professionalism and constantly improve the quality of the services provided',
        'why_2': 'Experienced staff',
        'why_2_text': 'Only qualified specialists with extensive experience in the real estate industry work in our agency. We are always ready to listen to your needs and provide an individual approach to each client',
        'why_3': 'Full transparency',
        'why_3_text': 'Our agency aims for complete transparency in all transactions. We honestly inform our clients about all aspects of the transaction and always adhere to high standards of ethics and professionalism. Your trust is our priority!'
    
    }
};


// Функция для переключения языка
function toggleLanguage(language) {
    let language_cap = document.getElementById("language_cap");
    let agency = document.getElementById("agency");
    let h1_title = document.getElementById("h1_title");
    let h1_about = document.getElementById("h1_about");
    let h1_button = document.getElementById("h1_button");

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