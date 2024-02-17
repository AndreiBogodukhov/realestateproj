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
        'h1_about': 'Наше агентство предлагает персонализированный подбор роскошных кондоминиумов, уютных квартир и эксклюзивных вилл на живописном острове Пхукет. Доверьте нам ваш поиск и обеспечьте себя неповторимым опытом приобретения или аренды недвижимости в этом удивительном уголке Таиланда',
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
        'why_3_text': 'Наше агентство стремится к полной прозрачности во всех сделках. Мы честно информируем наших клиентов о всех аспектах сделки и всегда придерживаемся высоких стандартов этики и профессионализма. Ваше доверие - наш приоритет!',
        'f_home': 'Домашняя',
        'f_sitemap': 'Карта сайта',
        'f_sell': 'Продажа недвижимости',
        'f_rent': 'Аренда',
        'f_empl': 'Сотрудники',
        'f_contacts': 'Контакты',
        'f_our_contacts': 'Контакты',
        'f_text': 'Доверьте нам свои потребности в недвижимости, и мы обеспечим вас профессиональным сервисом и индивидуальным подходом',
        'our_team_empl': 'Сотрудники',
        'our_team_h2': 'Наша команда профессионалов',
        'our_team_text': 'Наша команда состоит из высококвалифицированных специалистов с богатым опытом в сфере недвижимости. Мы предоставляем клиентам только лучшие решения и гарантируем профессиональный подход к каждому случаю. Вместе мы работаем на достижение ваших целей в области недвижимости',
        'how_to_find': 'Как связаться с нами',
        'cont_info': 'Контактная информация',
        'con_adress': 'Адрес',
        'con_tel': 'Телефон',
        'con_name': 'Имя',
        'con_telegram': 'Телеграм',
        'con_agreement': 'Нажимая кнопку "Отправить" я даю согласие на обработку персональных данных',
        'con_submit': 'Отправить',
        'q1': 'За сколько можно купить квартиру на Пхукете у застройщика?',
        'q1_text': 'Квартиры от застройщика на Пхукете доступны в разных ценовых категориях, начиная от определенной суммы в зависимости от местоположения и характеристик объекта.',
        'q2': 'Как оформить недвижимость при покупке?',
        'q2_text': 'Для оформления недвижимости при покупке на Пхукете существуют различные виды собственности, включая варианты для иностранных граждан, такие как право собственности на землю через юридическое лицо или аренда на длительный срок.',
        'q3': 'Сколько стоит самая дешевая вилла на Пхукете?',
        'q3_text': 'Самые доступные виллы на Пхукете имеют разнообразные цены, начиная от 150 тыс. долларов, в зависимости от района, состояния и размеров объекта.',
        'q4': 'Можно ли купить участок и построить дом самостоятельно?',
        'q4_text': 'Приобретение участка с последующим строительством дома на Пхукете разрешено, однако потребуются соответствующие разрешения и процедуры, а чтобы узнать какие - обращайтесь к нам!',
        'q6': 'Могу ли я как иностранец купить недвижимость в Таиланде?',
        'q6_text': 'Для иностранных граждан существуют определенные правила и ограничения при покупке недвижимости в Таиланде, включая возможность владения объектами в рамках определенных законов и требований.',
        'q7': 'Сколько стоит содержание виллы, квартиры в год?',
        'q7_text': 'Стоимость содержания виллы или квартиры на Пхукете может варьироваться в зависимости от услуг и местоположения объекта, обычно она включает в себя расходы на обслуживание, управление.',
        'q8': 'Выгодно ли вкладывать деньги в тайскую недвижимость?',
        'q8_text': 'Вложения в тайскую недвижимость могут быть выгодными и приносить до 9% годовых в зависимости от района и потенциала для аренды или перепродажи.',
        'q9': 'Что такое покупка недвижимости на тайскую компанию?',
        'q9_text': 'Покупка недвижимости через тайскую компанию может предоставить некоторые юридические и финансовые преимущества: более гибкие условия владения и управления недвижимостью.'
    },
    'EN': {
        'language_cap': 'EN',
        'agency': 'Real estate agency',
        'h1_title': 'Buy and Rent real estate in Phuket',
        'h1_about': 'Our agency offers personalized selection of luxurious condominiums, cozy apartments, and exclusive villas on the picturesque island of Phuket. Entrust us with your search and indulge in a unique experience of purchasing or renting real estate in this amazing corner of Thailand',
        'h1_button': 'See more about us',
        'gallery_category_1': 'Categories',
        'gallery_h2_1': 'Buy Real Estate',
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
        'why_3_text': 'Our agency aims for complete transparency in all transactions. We honestly inform our clients about all aspects of the transaction and always adhere to high standards of ethics and professionalism. Your trust is our priority!',
        'f_home': 'Home page',
        'f_sitemap': 'Sitemap',
        'f_sell': 'Buy Real Estate',
        'f_rent': 'Rent Real Estate',
        'f_empl': 'Our Team',
        'f_contacts': 'Contacts',
        'f_our_contacts': 'Contacts',
        'f_text': 'Trust us with your real estate needs, and we will provide you with professional service and individual approach',
        'our_team_empl': 'Our Team',
        'our_team_h2': 'Our Specialists',
        'our_team_text': 'Our team consists of highly qualified professionals with extensive experience in the real estate industry. We provide clients with only the best solutions and guarantee a professional approach to each case. Together, we work towards achieving your real estate goals',
        'how_to_find': 'How to find us',
        'cont_info': 'Contact Info',
        'con_adress': 'Address',
        'con_tel': 'Telephone',
        'con_name': 'Name',
        'con_telegram': 'Telegram',
        'con_agreement': 'By clicking the "Submit" button, I consent to the processing of personal data',
        'con_submit': 'Submit',
        'q1': 'How much does it cost to buy an apartment in Phuket from a developer?',
        'q1_text': 'Apartments from developers in Phuket are available in various price categories, starting from a certain amount depending on the location and characteristics of the property.',
        'q2': 'How can I register property when buying?',
        'q2_text': 'There are various types of ownership for property registration when buying in Phuket, including options for foreign citizens, such as ownership rights to land through a legal entity or long-term lease.',
        'q3': 'What is the cost of the cheapest villa in Phuket?',
        'q3_text': 'The most affordable villas in Phuket have diverse prices, starting from $150,000, depending on the area, condition, and size of the property.',
        'q4': 'Can I buy land and build a house with myself?',
        'q4_text': 'Buying land with subsequent construction of a house in Phuket is allowed, however, appropriate permits and procedures are required, contact us to know more!',
        'q6': 'Can I buy/aquire property in Thailand as a foreigner?',
        'q6_text': 'There are specific rules and restrictions when buying property in Thailand as a foreign citizen, including the possibility of owning properties within certain laws and requirements.',
        'q7': 'How much does it cost to maintain a villa or apartment annually?',
        'q7_text': 'The cost of maintaining a villa or apartment in Phuket can vary depending on the services and location of the property, usually including maintenance and management expenses.',
        'q8': 'Is it profitable to invest money in Thai real estate?',
        'q8_text': 'Investments in Thai real estate can be profitable and bring up to 9% annual return depending on the area and potential for rental or resale.',
        'q9': 'What is purchasing property through a Thai company?',
        'q9_text': 'Purchasing property through a Thai company can provide some legal and financial advantages: more flexible ownership and property management terms.'
    
    }
};


// Функция для переключения языка
function toggleLanguage(language) {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
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
    // Восстанавливаем позицию прокрутки после изменения контента
    window.scrollTo(0, scrollTop);
}

// Проверяем, есть ли предпочтительный язык в локальном хранилище при загрузке страницы
document.addEventListener("DOMContentLoaded", function (event) {
    let preferredLanguage = localStorage.getItem('preferredLanguage');
    if (preferredLanguage) {
        // Если есть, то применяем предпочтительный язык
        toggleLanguage(preferredLanguage);
    }
});