# Restaurant Poseidon - Landing Page

Landing page complet pentru restaurantul de evenimente Poseidon (restaurant de nuntă).

## Structura proiectului

```
poseidon/
├── index.php                      # Pagina principală (landing page)
├── partials/
│   ├── header.php                 # Head + navbar
│   ├── footer.php                 # Footer complet
│   └── reservation-form.php      # Formularul de rezervare
├── assets/
│   ├── css/
│   │   └── style.css             # Toate stilurile (responsive, mobil first)
│   ├── js/
│   │   └── main.js               # Smooth scroll, validare formular, butoane sticky
│   └── img/
│       └── logo-poseidon.png     # Logo-ul restaurantului (de încărcat)
└── README.md                      # Acest fișier
```

## Cerințe

- PHP 7.0 sau mai nou
- Server web (Apache/Nginx) sau PHP built-in server

## Instalare și rulare

### Opțiunea 1: PHP Built-in Server

```bash
php -S localhost:8000
```

Apoi deschide în browser: `http://localhost:8000`

### Opțiunea 2: XAMPP/WAMP/MAMP

1. Copiază proiectul în directorul `htdocs` (XAMPP) sau `www` (WAMP/MAMP)
2. Deschide în browser: `http://localhost/poseidon`

## Funcționalități

### Design
- ✅ Design elegant, premium cu paletă de culori închisă și accente aurii
- ✅ Fonturi Google: Playfair Display (headings) și Montserrat (text)
- ✅ Complet responsive (mobil first)
- ✅ Animații subtile la scroll

### Secțiuni
1. **HERO** - Banner principal cu formular de rezervare
2. **Despre Restaurant** - Informații despre restaurant
3. **Galerie Foto** - Grid cu imagini (placeholder-uri)
4. **Beneficii** - Carduri cu avantajele restaurantului
5. **Testimoniale** - Recenzii de la mirii care au ales restaurantul
6. **Locație** - Adresă și hartă Google Maps
7. **CTA Final** - Call-to-action pentru rezervare
8. **Footer** - Date de contact, program, social media

### Funcționalități JavaScript
- ✅ Smooth scroll către secțiuni
- ✅ Buton sticky "Sună acum" pentru mobil
- ✅ Validare formular (frontend)
- ✅ Navbar cu schimbare la scroll
- ✅ Animații fade-in la scroll

## Personalizare

### Logo
Încarcă logo-ul real în: `assets/img/logo-poseidon.png`

### Date de contact
Editează în:
- `partials/footer.php` - Footer
- `index.php` - Linkuri "Sună acum" (înlocuiește `+373XXXXXXXX`)

### Adresă
Editează în:
- `partials/footer.php` - Footer
- `index.php` - Secțiunea "Locație"

### Google Maps
Înlocuiește iframe-ul din secțiunea "Locație" (`index.php`) cu embed-ul real de la Google Maps.

### Imagini galerie
Înlocuiește URL-urile placeholder din `index.php` (secțiunea galerie) cu imagini reale.

## Note tehnice

- Toate include-urile PHP folosesc `include`
- Nu sunt dependențe externe (doar Google Fonts)
- Cod curat, comentat unde este necesar
- Validare HTML5 și CSS3 modern
- Compatibil cu toate browserele moderne

## Browser support

- Chrome (ultimele 2 versiuni)
- Firefox (ultimele 2 versiuni)
- Safari (ultimele 2 versiuni)
- Edge (ultimele 2 versiuni)

## Licență

Proiect creat pentru Restaurant Poseidon.

