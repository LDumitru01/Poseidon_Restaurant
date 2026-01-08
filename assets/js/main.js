/**
 * Main JavaScript pentru Restaurant Poseidon
 * Funcționalități: smooth scroll, meniu mobil, validare formular, butoane sticky
 */

// ============================================
// SMOOTH SCROLL către secțiuni
// ============================================
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        const navbar = document.getElementById('navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const sectionPosition = section.offsetTop - navbarHeight;
        
        window.scrollTo({
            top: sectionPosition,
            behavior: 'smooth'
        });
    }
}

// Funcție helper pentru a obține limba curentă din URL (din path: /ro sau /ru, funcționează și cu subdirectoare)
function getCurrentLang() {
    const path = window.location.pathname;
    const pathParts = path.split('/').filter(part => part !== '');
    
    // Caută 'ro' sau 'ru' în path
    for (let i = 0; i < pathParts.length; i++) {
        if (pathParts[i] === 'ro' || pathParts[i] === 'ru') {
            return pathParts[i];
        }
    }
    
    return 'ro'; // Default
}

// Funcție pentru a adăuga limba la link-uri (subdirectoare: /ro sau /ru)
function addLangToUrl(url) {
    const lang = getCurrentLang();
    // Dacă URL-ul este relativ (începe cu # sau /)
    if (url.startsWith('#')) {
        // Pentru hash-uri, păstrăm limba din URL-ul curent
        return url;
    }
    
    // Pentru URL-uri absolute sau relative, adăugăm limba ca subdirector
    try {
        const urlObj = new URL(url, window.location.origin);
        const path = urlObj.pathname;
        
        // Elimină limba existentă dacă există
        let cleanPath = path.replace(/^\/(ro|ru)/, '');
        if (!cleanPath.startsWith('/')) {
            cleanPath = '/' + cleanPath;
        }
        
        // Adaugă limba
        urlObj.pathname = '/' + lang + cleanPath;
        return urlObj.toString();
    } catch (e) {
        // Dacă URL-ul nu este valid, returnează-l așa cum este
        return url;
    }
}

// ============================================
// MOBILE MENU FUNCTIONALITY
// ============================================
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    
    if (!mobileMenu) {
        console.error('Mobile menu element not found');
        return;
    }
    
    const isOpen = !mobileMenu.classList.contains('-translate-x-full');
    
    if (isOpen) {
        // Închide meniul
        mobileMenu.classList.add('-translate-x-full');
        document.body.style.overflow = '';
        
        if (mobileMenuBtn) {
            const icon = mobileMenuBtn.querySelector('svg');
            if (icon) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            }
        }
    } else {
        // Deschide meniul
        mobileMenu.classList.remove('-translate-x-full');
        document.body.style.overflow = 'hidden';
        
        if (mobileMenuBtn) {
            const icon = mobileMenuBtn.querySelector('svg');
            if (icon) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
            }
        }
    }
}

function closeMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    
    if (mobileMenu) {
        mobileMenu.classList.add('-translate-x-full');
        document.body.style.overflow = '';
        
        if (mobileMenuBtn) {
            const icon = mobileMenuBtn.querySelector('svg');
            if (icon) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            }
        }
    }
}

// Inițializare când DOM-ul este gata
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });
    } else {
        console.error('Mobile menu button not found');
    }
    
    // Închide meniul când se face click în afara lui
    document.addEventListener('click', function(event) {
        if (mobileMenu && mobileMenuBtn) {
            const isClickInsideMenu = mobileMenu.contains(event.target);
            const isClickOnButton = mobileMenuBtn.contains(event.target);
            
            if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('-translate-x-full')) {
                closeMobileMenu();
            }
        }
    });
    
    // Închide meniul când se face scroll
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (mobileMenu && !mobileMenu.classList.contains('-translate-x-full')) {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(function() {
                closeMobileMenu();
            }, 100);
        }
    });
});

// ============================================
// NAVBAR - schimbare la scroll
// ============================================
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.3)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.boxShadow = 'none';
        }
    }
});

// ============================================
// ACTIVE NAVIGATION LINK
// ============================================
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

function updateActiveNavLink() {
    let current = '';
    const scrollY = window.pageYOffset;
    const navbarHeight = document.getElementById('navbar')?.offsetHeight || 80;

    sections.forEach(section => {
        const sectionTop = section.offsetTop - navbarHeight - 100;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');

        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            current = sectionId;
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('text-gold-light');
        link.classList.add('text-gray-300');
        
        const href = link.getAttribute('href');
        if (href && href.substring(1) === current) {
            link.classList.remove('text-gray-300');
            link.classList.add('text-gold-light');
        }
    });
}

window.addEventListener('scroll', updateActiveNavLink);
updateActiveNavLink(); // Inițializare

// ============================================
// BUTON STICKY "Sună acum" pentru mobil
// ============================================
const stickyCallBtn = document.getElementById('stickyCallBtn');

if (stickyCallBtn) {
    // Afișează butonul doar pe mobil
    function checkScreenSize() {
        if (window.innerWidth <= 1023) {
            stickyCallBtn.classList.remove('hidden');
        } else {
            stickyCallBtn.classList.add('hidden');
        }
    }
    
    // Verifică la încărcare și la resize
    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
    
    // Ascunde butonul când utilizatorul este în footer
    window.addEventListener('scroll', function() {
        const footer = document.getElementById('footer');
        if (footer && window.innerWidth <= 1023) {
            const footerTop = footer.offsetTop;
            const windowBottom = window.scrollY + window.innerHeight;
            
            if (windowBottom >= footerTop - 100) {
                stickyCallBtn.style.opacity = '0';
                stickyCallBtn.style.pointerEvents = 'none';
            } else {
                stickyCallBtn.style.opacity = '1';
                stickyCallBtn.style.pointerEvents = 'auto';
            }
        }
    });
}

// ============================================
// VALIDARE FORMULAR DE REZERVARE
// ============================================
// Inițializare când DOM-ul este gata
document.addEventListener('DOMContentLoaded', function() {
    const reservationForm = document.getElementById('reservationForm');
    const formMessage = document.getElementById('formMessage');
    
    if (!reservationForm) {
        console.error('Reservation form not found');
        return;
    }
    
    if (!formMessage) {
        console.error('Form message element not found');
        return;
    }
    
    reservationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset mesaj anterior
        formMessage.textContent = '';
        formMessage.className = 'hidden mt-4 p-4 rounded-md text-sm text-center';
        formMessage.classList.add('hidden');
        
        // Obține valorile din formular
        const nume = document.getElementById('nume').value.trim();
        const telefon = document.getElementById('telefon').value.trim();
        const tipEveniment = document.getElementById('tip-eveniment').value;
        const dataEveniment = document.getElementById('data-eveniment').value;
        
        // Funcție helper pentru traduceri
        const t = (key) => {
            const lang = window.getCurrentLanguage ? window.getCurrentLanguage() : 'ro';
            return window.translations && window.translations[lang] && window.translations[lang][key]
                ? window.translations[lang][key]
                : key;
        };
        
        // Validare câmpuri obligatorii
        let errors = [];
        
        if (!nume) {
            errors.push(t('form.name.label').replace(' *', '') + ' ' + t('form.error.required'));
        } else if (nume.length < 2) {
            errors.push(t('form.error.name.short'));
        }
        
        if (!telefon) {
            errors.push(t('form.phone.label').replace(' *', '') + ' ' + t('form.error.required'));
        } else {
            // Validare simplă pentru telefon
            const cleanPhone = telefon.replace(/\s/g, '');
            if (cleanPhone.length < 8) {
                errors.push(t('form.error.phone.invalid'));
            }
        }
        
        if (!tipEveniment) {
            errors.push(t('form.event.label').replace(' *', '') + ' ' + t('form.error.required'));
        }
        
        if (!dataEveniment) {
            errors.push(t('form.date.label').replace(' *', '') + ' ' + t('form.error.required'));
        } else {
            // Verifică dacă data este în trecut
            const selectedDate = new Date(dataEveniment);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (selectedDate < today) {
                errors.push(t('form.error.date.past'));
            }
        }
        
        // Dacă există erori, le afișează
        if (errors.length > 0) {
            formMessage.textContent = errors.join('. ');
            formMessage.className = 'mt-4 p-4 rounded-md text-sm text-center bg-red-500/20 border border-red-500/50 text-red-400';
            formMessage.classList.remove('hidden');
            
            // Scroll la mesajul de eroare
            formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            return;
        }
        
        // Dacă validarea este OK, trimite datele către Telegram
        const dataFlexibila = document.getElementById('data-flexibila').checked;
        
        // Pregătește datele pentru trimitere
        const formData = {
            'nume': nume,
            'telefon': telefon,
            'tip-eveniment': tipEveniment,
            'data-eveniment': dataEveniment,
            'data-flexibila': dataFlexibila
        };
        
        // Afișează mesaj de încărcare
        formMessage.textContent = t('form.loading');
        formMessage.className = 'mt-4 p-4 rounded-md text-sm text-center bg-blue-500/20 border border-blue-500/50 text-blue-400';
        formMessage.classList.remove('hidden');
        
        // Dezactivează butonul de submit
        const submitButton = reservationForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.getAttribute('data-original-text') || submitButton.textContent;
        submitButton.setAttribute('data-original-text', originalButtonText);
        submitButton.disabled = true;
        submitButton.textContent = t('form.loading');
        
        // Trimite datele către API
        const apiUrl = 'api/send-telegram.php';
        
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Succes
                formMessage.textContent = data.message || t('form.success');
                formMessage.className = 'mt-4 p-4 rounded-md text-sm text-center bg-green-500/20 border border-green-500/50 text-green-400';
                formMessage.classList.remove('hidden');
                
                // Resetează formularul
                reservationForm.reset();
                
                // Re-traduce formularul după reset
                if (window.translatePage) {
                    window.translatePage();
                }
                
                // Scroll la mesajul de succes
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
                // Ascunde mesajul după 5 secunde
                setTimeout(function() {
                    formMessage.classList.add('hidden');
                }, 5000);
            } else {
                // Eroare
                formMessage.textContent = data.message || t('form.error');
                formMessage.className = 'mt-4 p-4 rounded-md text-sm text-center bg-red-500/20 border border-red-500/50 text-red-400';
                formMessage.classList.remove('hidden');
                
                // Scroll la mesajul de eroare
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        })
        .catch(error => {
            // Eroare de rețea
            console.error('Eroare la trimiterea formularului:', error);
            console.error('API URL:', apiUrl);
            formMessage.textContent = t('form.error.network') + ' (' + error.message + ')';
            formMessage.className = 'mt-4 p-4 rounded-md text-sm text-center bg-red-500/20 border border-red-500/50 text-red-400';
            formMessage.classList.remove('hidden');
            
            // Scroll la mesajul de eroare
            formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        })
        .finally(() => {
            if (submitButton) {
                submitButton.disabled = false;
                const originalText = submitButton.getAttribute('data-original-text');
                if (originalText) {
                    submitButton.textContent = originalText;
                } else {
                    submitButton.textContent = t('form.submit');
                }
            }
        });
    });
});

// ============================================
// GALLERY LIGHTBOX
// ============================================
let currentImageIndex = 0;
let galleryImages = [];

function initGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxSection = document.getElementById('galleryLightboxSection');
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const closeBtn = document.getElementById('closeLightbox');
    const prevBtn = document.getElementById('prevImage');
    const nextBtn = document.getElementById('nextImage');
    
    if (!lightboxSection || !lightbox || !lightboxImage) return;
    
    // Colectează toate imaginile
    galleryItems.forEach((item, index) => {
        const imageUrl = item.getAttribute('data-image');
        const imageAlt = item.getAttribute('data-alt');
        
        if (imageUrl) {
            galleryImages.push({
                url: imageUrl,
                alt: imageAlt || 'Imagine galerie'
            });
            
            // Adaugă event listener pentru click
            item.addEventListener('click', function() {
                openLightbox(index);
            });
        }
    });
    
    function openLightbox(index) {
        if (index < 0 || index >= galleryImages.length) return;
        
        currentImageIndex = index;
        lightboxImage.src = galleryImages[index].url;
        lightboxImage.alt = galleryImages[index].alt;
        lightboxSection.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Previne scroll-ul paginii
        
        // Ascunde header-ul
        const navbar = document.getElementById('navbar');
        if (navbar) {
            navbar.style.display = 'none';
        }
    }
    
    function closeLightbox() {
        lightboxSection.classList.add('hidden');
        document.body.style.overflow = ''; // Re-activează scroll-ul
        
        // Re-afișează header-ul
        const navbar = document.getElementById('navbar');
        if (navbar) {
            navbar.style.display = '';
        }
    }
    
    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
        lightboxImage.src = galleryImages[currentImageIndex].url;
        lightboxImage.alt = galleryImages[currentImageIndex].alt;
    }
    
    function showPrevImage() {
        currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
        lightboxImage.src = galleryImages[currentImageIndex].url;
        lightboxImage.alt = galleryImages[currentImageIndex].alt;
    }
    
    // Event listeners
    if (closeBtn) {
        closeBtn.addEventListener('click', closeLightbox);
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', showNextImage);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', showPrevImage);
    }
    
    // Închide lightbox când se face click pe overlay-ul de background
    const lightboxOverlay = document.getElementById('lightboxOverlay');
    if (lightboxOverlay) {
        lightboxOverlay.addEventListener('click', function(e) {
            closeLightbox();
        });
    }
    
    // Previne închiderea lightbox-ului când se face click pe imagine sau container-ul ei
    const imageContainer = lightbox.querySelector('.max-w-7xl');
    if (imageContainer) {
        imageContainer.addEventListener('click', function(e) {
            e.stopPropagation(); // Previne propagarea click-ului către overlay
        });
    }
    
    if (lightboxImage) {
        lightboxImage.addEventListener('click', function(e) {
            e.stopPropagation(); // Previne propagarea click-ului către overlay
        });
    }
    
    // Navigare cu tastele
    document.addEventListener('keydown', function(e) {
        if (!lightboxSection.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowRight') {
                showNextImage();
            } else if (e.key === 'ArrowLeft') {
                showPrevImage();
            }
        }
    });
}

// Inițializează galeria când se încarcă pagina
document.addEventListener('DOMContentLoaded', function() {
    initGallery();
});

// ============================================
// ANIMĂRI LA SCROLL (fade in)
// ============================================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observă elementele care trebuie animate
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll(
        '.benefit-card, .testimonial-card, .gallery-item, .about-text'
    );
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// ============================================
// UTILITARE: Formatare telefon (opțional)
// ============================================
const telefonInput = document.getElementById('telefon');
if (telefonInput) {
    telefonInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, ''); // Elimină toate caracterele non-numerice
        
        // Adaugă prefixul +373 dacă nu există
        if (value.length > 0 && !value.startsWith('373') && !value.startsWith('0')) {
            if (value.length <= 8) {
                value = '0' + value;
            }
        }
        
        // Limitează la 12 caractere
        if (value.length > 12) {
            value = value.substring(0, 12);
        }
        
        e.target.value = value;
    });
}

// ============================================
// UTILITARE: Setare data minimă pentru input date
// ============================================
const dataEvenimentInput = document.getElementById('data-eveniment');
if (dataEvenimentInput) {
    // Setează data minimă la ziua de azi
    const today = new Date().toISOString().split('T')[0];
    dataEvenimentInput.setAttribute('min', today);
}

// ============================================
// PREVENIRE COMPORTAMENT DEFAULT pentru linkuri către secțiuni
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Dacă este link către o secțiune
            if (href !== '#' && href.length > 1) {
                const targetId = href.substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    scrollToSection(targetId);
                }
            }
        });
    });
});

// Export funcții pentru utilizare globală
window.scrollToSection = scrollToSection;
window.closeMobileMenu = closeMobileMenu;
window.toggleMobileMenu = toggleMobileMenu;

console.log('Restaurant Poseidon - Site încărcat cu succes!');
