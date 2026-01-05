/**
 * Translation System pentru Restaurant Poseidon
 * Suportă: Română (ro) și Rusă (ru)
 */

const translations = {
    ro: {
        // Navigation
        'nav.home': 'Acasă',
        'nav.about': 'Despre',
        'nav.gallery': 'Galerie',
        'nav.benefits': 'Beneficii',
        'nav.testimonials': 'Recenzii',
        'nav.location': 'Locație',
        'nav.reserve': 'Rezervă',
        
        // Hero Section
        'hero.subtitle': 'Restaurant de evenimente',
        'hero.title': 'Poseidon',
        'hero.subtitle2': 'Restaurant de nunti',
        'hero.description': 'Transformăm momentele speciale ale vieții tale în evenimente memorabile, cu atenție la fiecare detaliu și servicii de excepție.',
        'hero.call': 'Sună acum',
        'hero.reserve': 'Rezervă data',
        
        // About Section
        'about.label': 'Despre Noi',
        'about.title': 'Restaurant Poseidon',
        'about.description': 'Transformăm momentele speciale ale vieții tale în evenimente memorabile, cu atenție la fiecare detaliu și servicii de excepție',
        'about.stats.years': 'Ani experiență',
        'about.stats.events': 'Evenimente',
        'about.stats.satisfaction': 'Satisfacție',
        'about.stats.support': 'Suport',
        'about.story.title': 'Povestea Noastră',
        'about.story.text1': 'Cu o experiență solidă în organizarea nunților și evenimentelor de neuitat, Restaurant Poseidon oferă o atmosferă elegantă și rafinată, perfectă pentru momentele speciale ale vieții tale.',
        'about.story.text2': 'Echipa noastră profesionistă se ocupă de fiecare detaliu, de la meniul personalizat până la decorul sălii, astfel încât tu să te bucuri de evenimentul tău fără stres sau griji.',
        'about.mission.title': 'Misiunea Noastră',
        'about.mission.text': 'Ne dedicăm să creăm experiențe culinare și evenimente care rămân în amintire pentru totdeauna. Fiecare detaliu contează, de la primul contact până la ultimul moment al evenimentului tău.',
        'about.benefits.title': 'De Ce Să Ne Alegi',
        'about.benefit1.title': 'Experiență dovedită',
        'about.benefit1.text': 'Ani de experiență în organizarea evenimentelor de neuitat',
        'about.benefit2.title': 'Atmosferă elegantă',
        'about.benefit2.text': 'Spațiu rafinat și elegant, perfect pentru evenimente speciale',
        'about.benefit3.title': 'Personal profesionist',
        'about.benefit3.text': 'Echipă dedicată și atentă la fiecare detaliu',
        'about.benefit4.title': 'Meniu personalizat',
        'about.benefit4.text': 'Colaborăm cu tine pentru a crea un meniu perfect',
        'about.benefit5.title': 'Fără stres',
        'about.benefit5.text': 'Evenimente perfect organizate, fără griji pentru miri',
        'about.benefit6.title': 'Coordonare completă',
        'about.benefit6.text': 'Gestionăm totul de la planificare până la finalizare',
        
        // Gallery Section
        'gallery.label': 'Momentele Noastre',
        'gallery.title': 'Galerie – Nunți organizate la noi',
        'gallery.description': 'Descoperă atmosfera magică a evenimentelor noastre și lasă-te inspirat pentru momentul tău special',
        'gallery.view': 'Vezi imaginea',
        
        // Benefits Section
        'benefits.label': 'Avantajele Noastre',
        'benefits.title': 'De ce să alegi restaurantul nostru pentru nuntă?',
        'benefits.description': 'Oferim o experiență completă și personalizată pentru momentul cel mai important din viața ta',
        'benefits.benefit1.title': 'Sală spațioasă și elegantă',
        'benefits.benefit1.text': 'Un spațiu generos, perfect amenajat pentru evenimente de până la 200 de persoane, cu design rafinat și atmosferă elegantă.',
        'benefits.benefit2.title': 'Meniu personalizabil',
        'benefits.benefit2.text': 'Colaborăm cu tine pentru a crea un meniu care să reflecte gusturile și preferințele tale, cu opțiuni variate și preparate de excepție.',
        'benefits.benefit3.title': 'Servire profesionistă',
        'benefits.benefit3.text': 'Echipă experimentată, atentă la detalii și dedicată să facă evenimentul tău perfect, cu servire impecabilă și atenție la fiecare oaspete.',
        'benefits.benefit4.title': 'Decor personalizat',
        'benefits.benefit4.text': 'Flexibilitate completă în alegerea decorului și tematicii evenimentului tău, cu suport complet pentru realizarea viziunii tale.',
        'benefits.benefit5.title': 'Locație accesibilă',
        'benefits.benefit5.text': 'Poziționat strategic, cu parcare disponibilă și acces facil pentru oaspeți, într-o zonă convenabilă și bine conectată.',
        'benefits.benefit6.title': 'Raport calitate–preț',
        'benefits.benefit6.text': 'Oferim servicii premium la prețuri competitive, fără compromisuri la calitate, pentru o experiență de neuitat la un raport excelent.',
        'benefits.cta.title': 'Gata să îți transformăm visul în realitate?',
        'benefits.cta.text': 'Contactează-ne astăzi pentru a discuta despre evenimentul tău perfect',
        'benefits.cta.button': 'Sună acum',
        
        // Testimonials Section
        'testimonials.title': 'Ce spun mirii care ne-au ales',
        'testimonials.description': 'Experiențele reale ale cuplurilor care și-au ales restaurantul nostru pentru momentul cel mai important',
        'testimonials.testimonial1.text': 'Totul a fost perfect, mâncarea excelentă, personalul foarte atent și profesional. Nunta noastră a fost exact cum ne-am dorit, fără niciun stres. Recomand cu toată încrederea!',
        'testimonials.testimonial1.author': 'Maria și Ion',
        'testimonials.testimonial2.text': 'Recomand cu toată încrederea, nunta noastră a fost exact cum ne-am dorit. Echipa a fost impecabilă, decorul frumos și mâncarea delicioasă. Mulțumim din suflet!',
        'testimonials.testimonial2.author': 'Elena și Andrei',
        'testimonials.testimonial3.text': 'O experiență de neuitat! Totul a decurs perfect, de la planificare până la ultimul detaliu. Oaspeții noștri au fost impresionați de servire și calitatea mâncării. Vă mulțumim!',
        'testimonials.testimonial3.author': 'Ana și Mihai',
        
        // Location Section
        'location.title': 'Unde ne găsești',
        'location.address': 'Adresă:',
        'location.address.text': 'or. Vadul lui Voda, Parcul Nistrean, Chișinău, Republica Moldova',
        'location.description': 'Locația noastră oferă parcare gratuită și acces ușor pentru toți oaspeții. Poziționat strategic în centrul orașului, este perfect pentru evenimente fără bătăi de cap.',
        'location.note': 'Locație ideală pentru evenimente fără bătăi de cap',
        
        // CTA Final Section
        'cta.title': 'Rezervă din timp data evenimentului tău',
        'cta.description': 'Scrie-ne sau sună-ne pentru a verifica disponibilitatea și a primi o ofertă personalizată.',
        'cta.call': 'Sună acum',
        'cta.request': 'Trimite o solicitare',
        
        // Reservation Form
        'form.title': 'Verifică disponibilitatea',
        'form.name.label': 'Nume complet *',
        'form.name.placeholder': 'Introdu numele tău',
        'form.phone.label': 'Telefon *',
        'form.phone.placeholder': '+373 XXXX XXXX',
        'form.event.label': 'Tip eveniment *',
        'form.event.placeholder': 'Selectează tipul evenimentului',
        'form.event.wedding': 'Nuntă',
        'form.event.civil': 'Cununie',
        'form.event.baptism': 'Botez',
        'form.event.other': 'Alt eveniment',
        'form.date.label': 'Data evenimentului *',
        'form.flexible': 'Data este flexibilă',
        'form.submit': 'Verifică disponibilitatea',
        'form.note': 'Te contactăm rapid pentru confirmare și ofertă personalizată.',
        
        // Footer
        'footer.tagline': 'Restaurant de nuntă elegant pentru evenimentul tău de vis',
        'footer.contact': 'Date de contact',
        'footer.schedule': 'Program de lucru',
        'footer.schedule.week': 'Luni - Duminică: 10:00 - 22:00',
        'footer.schedule.events': 'Evenimente: pe bază de rezervare',
        'footer.follow': 'Urmărește-ne',
        'footer.copyright': 'Restaurant Poseidon, {year} – Toate drepturile rezervate.',
        
        // Sticky Button
        'sticky.call': 'Sună acum',
        
        // Form Messages
        'form.error.required': 'este obligatoriu',
        'form.error.name.short': 'Numele trebuie să aibă cel puțin 2 caractere',
        'form.error.phone.invalid': 'Te rugăm să introduci un număr de telefon valid',
        'form.error.date.past': 'Data evenimentului nu poate fi în trecut',
        'form.loading': 'Se trimite rezervarea...',
        'form.success': 'Îți mulțumim! Te vom contacta în scurt timp pentru confirmare și ofertă personalizată.',
        'form.error': 'A apărut o eroare. Te rugăm să încerci din nou sau să ne contactezi direct.',
        'form.error.network': 'A apărut o eroare de conexiune. Te rugăm să încerci din nou sau să ne contactezi direct.'
    },
    
    ru: {
        // Navigation
        'nav.home': 'Главная',
        'nav.about': 'О нас',
        'nav.gallery': 'Галерея',
        'nav.benefits': 'Преимущества',
        'nav.testimonials': 'Отзывы',
        'nav.location': 'Местоположение',
        'nav.reserve': 'Забронировать',
        
        // Hero Section
        'hero.subtitle': 'Ресторан для мероприятий',
        'hero.title': 'Посейдон',
        'hero.subtitle2': 'Ресторан для свадеб',
        'hero.description': 'Превращаем особые моменты вашей жизни в незабываемые события с вниманием к каждой детали и исключительным сервисом.',
        'hero.call': 'Позвонить сейчас',
        'hero.reserve': 'Забронировать дату',
        
        // About Section
        'about.label': 'О нас',
        'about.title': 'Ресторан Посейдон',
        'about.description': 'Превращаем особые моменты вашей жизни в незабываемые события с вниманием к каждой детали и исключительным сервисом',
        'about.stats.years': 'Лет опыта',
        'about.stats.events': 'Мероприятий',
        'about.stats.satisfaction': 'Удовлетворенность',
        'about.stats.support': 'Поддержка',
        'about.story.title': 'Наша история',
        'about.story.text1': 'С солидным опытом в организации свадеб и незабываемых мероприятий, ресторан Посейдон предлагает элегантную и утонченную атмосферу, идеальную для особых моментов вашей жизни.',
        'about.story.text2': 'Наша профессиональная команда позаботится о каждой детали, от персонализированного меню до оформления зала, чтобы вы могли наслаждаться своим мероприятием без стресса и забот.',
        'about.mission.title': 'Наша миссия',
        'about.mission.text': 'Мы стремимся создавать кулинарные впечатления и мероприятия, которые остаются в памяти навсегда. Каждая деталь важна, от первого контакта до последнего момента вашего мероприятия.',
        'about.benefits.title': 'Почему выбрать нас',
        'about.benefit1.title': 'Проверенный опыт',
        'about.benefit1.text': 'Годы опыта в организации незабываемых мероприятий',
        'about.benefit2.title': 'Элегантная атмосфера',
        'about.benefit2.text': 'Утонченное и элегантное пространство, идеальное для особых мероприятий',
        'about.benefit3.title': 'Профессиональный персонал',
        'about.benefit3.text': 'Преданная команда, внимательная к каждой детали',
        'about.benefit4.title': 'Персонализированное меню',
        'about.benefit4.text': 'Мы сотрудничаем с вами, чтобы создать идеальное меню',
        'about.benefit5.title': 'Без стресса',
        'about.benefit5.text': 'Идеально организованные мероприятия без забот для молодоженов',
        'about.benefit6.title': 'Полная координация',
        'about.benefit6.text': 'Мы управляем всем от планирования до завершения',
        
        // Gallery Section
        'gallery.label': 'Наши моменты',
        'gallery.title': 'Галерея – Свадьбы, организованные у нас',
        'gallery.description': 'Откройте для себя волшебную атмосферу наших мероприятий и вдохновитесь для вашего особого момента',
        'gallery.view': 'Посмотреть изображение',
        
        // Benefits Section
        'benefits.label': 'Наши преимущества',
        'benefits.title': 'Почему выбрать наш ресторан для свадьбы?',
        'benefits.description': 'Мы предлагаем полный и персонализированный опыт для самого важного момента в вашей жизни',
        'benefits.benefit1.title': 'Просторный и элегантный зал',
        'benefits.benefit1.text': 'Щедрое пространство, идеально обустроенное для мероприятий до 200 человек, с утонченным дизайном и элегантной атмосферой.',
        'benefits.benefit2.title': 'Персонализируемое меню',
        'benefits.benefit2.text': 'Мы сотрудничаем с вами, чтобы создать меню, отражающее ваши вкусы и предпочтения, с разнообразными вариантами и исключительными блюдами.',
        'benefits.benefit3.title': 'Профессиональное обслуживание',
        'benefits.benefit3.text': 'Опытная команда, внимательная к деталям и преданная тому, чтобы сделать ваше мероприятие идеальным, с безупречным обслуживанием и вниманием к каждому гостю.',
        'benefits.benefit4.title': 'Персонализированный декор',
        'benefits.benefit4.text': 'Полная гибкость в выборе декора и тематики вашего мероприятия, с полной поддержкой для реализации вашего видения.',
        'benefits.benefit5.title': 'Удобное местоположение',
        'benefits.benefit5.text': 'Стратегически расположен, с доступной парковкой и легким доступом для гостей, в удобной и хорошо связанной зоне.',
        'benefits.benefit6.title': 'Отличное соотношение цена-качество',
        'benefits.benefit6.text': 'Мы предлагаем премиальные услуги по конкурентоспособным ценам, без компромиссов в качестве, для незабываемого опыта с отличным соотношением.',
        'benefits.cta.title': 'Готовы превратить вашу мечту в реальность?',
        'benefits.cta.text': 'Свяжитесь с нами сегодня, чтобы обсудить ваше идеальное мероприятие',
        'benefits.cta.button': 'Позвонить сейчас',
        
        // Testimonials Section
        'testimonials.title': 'Что говорят молодожены, которые выбрали нас',
        'testimonials.description': 'Реальный опыт пар, которые выбрали наш ресторан для самого важного момента',
        'testimonials.testimonial1.text': 'Все было идеально, еда отличная, персонал очень внимательный и профессиональный. Наша свадьба была именно такой, как мы хотели, без какого-либо стресса. Рекомендую с полной уверенностью!',
        'testimonials.testimonial1.author': 'Мария и Ион',
        'testimonials.testimonial2.text': 'Рекомендую с полной уверенностью, наша свадьба была именно такой, как мы хотели. Команда была безупречна, декор красивый, а еда восхитительна. Спасибо от всего сердца!',
        'testimonials.testimonial2.author': 'Елена и Андрей',
        'testimonials.testimonial3.text': 'Незабываемый опыт! Все прошло идеально, от планирования до последней детали. Наши гости были впечатлены обслуживанием и качеством еды. Спасибо вам!',
        'testimonials.testimonial3.author': 'Ана и Михай',
        
        // Location Section
        'location.title': 'Где нас найти',
        'location.address': 'Адрес:',
        'location.address.text': 'г. Вадул-луй-Водэ, Парк Нистреан, Кишинёв, Республика Молдова',
        'location.description': 'Наше местоположение предлагает бесплатную парковку и легкий доступ для всех гостей. Стратегически расположен в центре города, идеально подходит для мероприятий без хлопот.',
        'location.note': 'Идеальное местоположение для мероприятий без хлопот',
        
        // CTA Final Section
        'cta.title': 'Забронируйте дату вашего мероприятия заранее',
        'cta.description': 'Напишите нам или позвоните, чтобы проверить доступность и получить персонализированное предложение.',
        'cta.call': 'Позвонить сейчас',
        'cta.request': 'Отправить запрос',
        
        // Reservation Form
        'form.title': 'Проверить доступность',
        'form.name.label': 'Полное имя *',
        'form.name.placeholder': 'Введите ваше имя',
        'form.phone.label': 'Телефон *',
        'form.phone.placeholder': '+373 XXXX XXXX',
        'form.event.label': 'Тип мероприятия *',
        'form.event.placeholder': 'Выберите тип мероприятия',
        'form.event.wedding': 'Свадьба',
        'form.event.civil': 'Гражданская церемония',
        'form.event.baptism': 'Крещение',
        'form.event.other': 'Другое мероприятие',
        'form.date.label': 'Дата мероприятия *',
        'form.flexible': 'Дата гибкая',
        'form.submit': 'Проверить доступность',
        'form.note': 'Мы быстро свяжемся с вами для подтверждения и персонализированного предложения.',
        
        // Footer
        'footer.tagline': 'Элегантный ресторан для свадеб для вашей мечты',
        'footer.contact': 'Контактная информация',
        'footer.schedule': 'Режим работы',
        'footer.schedule.week': 'Понедельник - Воскресенье: 10:00 - 22:00',
        'footer.schedule.events': 'Мероприятия: по предварительной записи',
        'footer.follow': 'Следите за нами',
        'footer.copyright': 'Ресторан Посейдон, {year} – Все права защищены.',
        
        // Sticky Button
        'sticky.call': 'Позвонить сейчас',
        
        // Form Messages
        'form.error.required': 'обязательно',
        'form.error.name.short': 'Имя должно содержать не менее 2 символов',
        'form.error.phone.invalid': 'Пожалуйста, введите действительный номер телефона',
        'form.error.date.past': 'Дата мероприятия не может быть в прошлом',
        'form.loading': 'Отправка бронирования...',
        'form.success': 'Спасибо! Мы свяжемся с вами в ближайшее время для подтверждения и персонализированного предложения.',
        'form.error': 'Произошла ошибка. Пожалуйста, попробуйте снова или свяжитесь с нами напрямую.',
        'form.error.network': 'Произошла ошибка подключения. Пожалуйста, попробуйте снова или свяжитесь с нами напрямую.'
    }
};

// Funcție pentru a obține limba curentă
function getCurrentLanguage() {
    return localStorage.getItem('language') || 'ro';
}

// Funcție pentru a seta limba
function setLanguage(lang) {
    if (translations[lang]) {
        localStorage.setItem('language', lang);
        const htmlElement = document.documentElement || document.getElementById('htmlLang');
        if (htmlElement) {
            htmlElement.lang = lang;
        }
        translatePage();
    }
}

// Funcție pentru a traduce pagina
function translatePage() {
    const lang = getCurrentLanguage();
    const t = translations[lang];
    
    if (!t) return;
    
    // Traduce toate elementele cu atributul data-translate
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (t[key]) {
            // Dacă este input cu placeholder
            if (element.tagName === 'INPUT' && (element.hasAttribute('placeholder') || element.hasAttribute('data-placeholder'))) {
                element.placeholder = t[key];
            }
            // Dacă este option
            else if (element.tagName === 'OPTION') {
                // Nu traduce valoarea, doar textul
                if (element.value === '' || element.value) {
                    element.textContent = t[key];
                }
            }
            // Dacă este label
            else if (element.tagName === 'LABEL') {
                // Păstrează asteriscul dacă există în textul original
                const originalText = element.getAttribute('data-original-text') || element.textContent;
                element.setAttribute('data-original-text', originalText);
                const hasAsterisk = originalText.includes('*');
                element.textContent = t[key] + (hasAsterisk ? ' *' : '');
            }
            // Dacă este alt element
            else {
                // Verifică dacă are placeholder
                if (element.hasAttribute('data-placeholder')) {
                    element.placeholder = t[key];
                } else {
                    // Salvează textul original dacă nu există
                    if (!element.hasAttribute('data-original-text')) {
                        element.setAttribute('data-original-text', element.textContent);
                    }
                    element.textContent = t[key];
                }
            }
        }
    });
    
    // Actualizează copyright cu anul
    const copyrightElements = document.querySelectorAll('[data-translate="footer.copyright"]');
    copyrightElements.forEach(el => {
        const year = new Date().getFullYear();
        el.textContent = t['footer.copyright'].replace('{year}', year);
    });
    
    // Actualizează butonul de limbă
    updateLanguageButtons();
}

// Export pentru utilizare globală
window.translations = translations;
// Funcție pentru a obține limba din URL
function getLanguageFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    const lang = urlParams.get('lang');
    if (lang && (lang === 'ro' || lang === 'ru')) {
        return lang;
    }
    return 'ro'; // Default
}

// Funcție pentru a seta limba în URL
function setLanguageInURL(lang) {
    const url = new URL(window.location.href);
    url.searchParams.set('lang', lang);
    window.history.pushState({ lang: lang }, '', url);
}

// Funcție pentru a obține limba curentă
function getCurrentLanguage() {
    return getLanguageFromURL();
}

// Funcție pentru a seta limba
function setLanguage(lang) {
    if (translations[lang]) {
        setLanguageInURL(lang);
        document.documentElement.lang = lang;
        translatePage();
        updateLanguageButtons();
    }
}

// Funcție pentru a actualiza butoanele de limbă
function updateLanguageButtons() {
    const currentLang = getCurrentLanguage();
    const langButton = document.getElementById('languageButton');
    const langButtonMobile = document.getElementById('languageButtonMobile');
    
    if (langButton) {
        langButton.textContent = currentLang === 'ro' ? 'RU' : 'RO';
        langButton.setAttribute('title', currentLang === 'ro' ? 'Переключить на русский' : 'Schimbă la română');
    }
    
    if (langButtonMobile) {
        langButtonMobile.textContent = currentLang === 'ro' ? 'RU' : 'RO';
        langButtonMobile.setAttribute('title', currentLang === 'ro' ? 'Переключить на русский' : 'Schimbă la română');
    }
}

// Export funcții
window.translatePage = translatePage;
window.getCurrentLanguage = getCurrentLanguage;
window.setLanguage = setLanguage;
window.updateLanguageButtons = updateLanguageButtons;

// Inițializare când DOM-ul este gata
document.addEventListener('DOMContentLoaded', function() {
    // Setează limba din URL sau default
    const lang = getLanguageFromURL();
    document.documentElement.lang = lang;
    translatePage();
    updateLanguageButtons();
    
    // Buton pentru schimbarea limbii (desktop)
    const langButton = document.getElementById('languageButton');
    if (langButton) {
        langButton.addEventListener('click', function() {
            const currentLang = getCurrentLanguage();
            const newLang = currentLang === 'ro' ? 'ru' : 'ro';
            setLanguage(newLang);
        });
    }
    
    // Buton pentru schimbarea limbii (mobile)
    const langButtonMobile = document.getElementById('languageButtonMobile');
    if (langButtonMobile) {
        langButtonMobile.addEventListener('click', function() {
            const currentLang = getCurrentLanguage();
            const newLang = currentLang === 'ro' ? 'ru' : 'ro';
            setLanguage(newLang);
        });
    }
    
    // Ascultă schimbările în URL (pentru back/forward buttons)
    window.addEventListener('popstate', function(event) {
        const lang = getLanguageFromURL();
        document.documentElement.lang = lang;
        translatePage();
        updateLanguageButtons();
    });
});

