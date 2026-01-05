# Configurare Telegram Bot pentru Formularul de Rezervare

## Pași pentru configurare

### 1. Creează un bot Telegram

1. Deschide Telegram și caută `@BotFather`
2. Trimite comanda `/newbot`
3. Urmează instrucțiunile pentru a da un nume botului
4. BotFather îți va da un **token** (ex: `123456789:ABCdefGHIjklMNOpqrsTUVwxyz`)
5. Salvează acest token!

### 2. Obține Chat ID-ul

#### Opțiunea A: Pentru mesaje personale
1. Caută botul tău pe Telegram (folosește numele pe care l-ai dat)
2. Trimite un mesaj botului (ex: `/start`)
3. Deschide în browser: `https://api.telegram.org/bot<TOKEN>/getUpdates`
   - Înlocuiește `<TOKEN>` cu token-ul tău
4. Găsește în răspuns `"chat":{"id":123456789}` - acesta este chat_id-ul tău

#### Opțiunea B: Pentru un grup
1. Adaugă botul într-un grup
2. Trimite un mesaj în grup
3. Deschide: `https://api.telegram.org/bot<TOKEN>/getUpdates`
4. Găsește `"chat":{"id":-123456789}` (va fi negativ pentru grupuri)

### 3. Configurează fișierul PHP

Deschide `api/send-telegram.php` și actualizează:

```php
define('TELEGRAM_BOT_TOKEN', 'TOKEN_TĂU_AICI');
define('TELEGRAM_CHAT_ID', 'CHAT_ID_TĂU_AICI');
```

**Exemplu:**
```php
define('TELEGRAM_BOT_TOKEN', '123456789:ABCdefGHIjklMNOpqrsTUVwxyz');
define('TELEGRAM_CHAT_ID', '123456789');
```

### 4. Testează

1. Completează formularul pe site
2. Trimite rezervarea
3. Ar trebui să primești un mesaj pe Telegram cu detaliile rezervării

## Format mesaj Telegram

Mesajul trimis pe Telegram va arăta astfel:

```
🎉 Nouă rezervare - Restaurant Poseidon

👤 Nume: [Numele clientului]
📞 Telefon: [Numărul de telefon]
🎊 Tip eveniment: [Tipul selectat]
📅 Data evenimentului: [Data selectată]
🔄 Data flexibilă: [Da/Nu]

⏰ Trimis la: [Data și ora trimiterii]
```

## Securitate

⚠️ **IMPORTANT:** Nu partaja niciodată token-ul botului sau chat_id-ul public!

- Fișierul `api/send-telegram.php` ar trebui să fie protejat
- Nu include token-ul în repository-ul Git public
- Folosește variabile de mediu sau fișiere de configurare separate pentru producție

## Depanare

### Nu primesc mesaje pe Telegram
1. Verifică că token-ul este corect
2. Verifică că chat_id-ul este corect
3. Asigură-te că ai trimis cel puțin un mesaj botului înainte
4. Verifică log-urile serverului pentru erori

### Eroare "Configurare incompletă"
- Asigură-te că ai actualizat ambele constante în `api/send-telegram.php`

### Eroare de conexiune
- Verifică că serverul permite conexiuni HTTPS către `api.telegram.org`
- Verifică că cURL este activat pe server

