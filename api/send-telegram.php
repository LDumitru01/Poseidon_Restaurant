<?php
/**
 * Endpoint pentru trimiterea datelor formularului către Telegram Bot
 * 
 * Configurare:
 * 1. Creează un bot pe Telegram folosind @BotFather
 * 2. Obține token-ul botului
 * 3. Obține chat_id-ul (ID-ul tău sau al grupului unde vrei să primești mesajele)
 * 4. Actualizează constantele de mai jos
 */

// Configurare Telegram Bot
define('TELEGRAM_BOT_TOKEN', '8454858848:AAF2u9DbMOCsA2cii04pEe7V-Qv8QEmfivw'); // Token-ul botului tău
define('TELEGRAM_CHAT_ID', '-5101269224'); // Chat ID-ul unde vrei să primești mesajele

// Setare header pentru JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Doar POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Metodă nepermisă']);
    exit;
}

// Obține datele din request
$input = json_decode(file_get_contents('php://input'), true);

// Validare date
$nume = isset($input['nume']) ? trim($input['nume']) : '';
$telefon = isset($input['telefon']) ? trim($input['telefon']) : '';
$tipEveniment = isset($input['tip-eveniment']) ? trim($input['tip-eveniment']) : '';
$dataEveniment = isset($input['data-eveniment']) ? trim($input['data-eveniment']) : '';
$dataFlexibila = isset($input['data-flexibila']) ? (bool)$input['data-flexibila'] : false;

// Validare câmpuri obligatorii
$errors = [];

if (empty($nume) || strlen($nume) < 2) {
    $errors[] = 'Numele este obligatoriu și trebuie să aibă cel puțin 2 caractere';
}

if (empty($telefon) || strlen($telefon) < 8) {
    $errors[] = 'Telefonul este obligatoriu';
}

if (empty($tipEveniment)) {
    $errors[] = 'Tipul evenimentului este obligatoriu';
}

if (empty($dataEveniment)) {
    $errors[] = 'Data evenimentului este obligatorie';
} else {
    // Verifică dacă data este în trecut
    $selectedDate = new DateTime($dataEveniment);
    $today = new DateTime();
    $today->setTime(0, 0, 0);
    
    if ($selectedDate < $today) {
        $errors[] = 'Data evenimentului nu poate fi în trecut';
    }
}

// Dacă există erori, returnează eroare
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode('. ', $errors)]);
    exit;
}

// Verifică dacă token-ul și chat_id-ul sunt configurate
if (TELEGRAM_BOT_TOKEN === 'YOUR_BOT_TOKEN_HERE' || TELEGRAM_CHAT_ID === 'YOUR_CHAT_ID_HERE') {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Configurare incompletă. Te rugăm să configurezi token-ul botului și chat_id-ul în api/send-telegram.php'
    ]);
    exit;
}

// Formatează tipul evenimentului pentru afișare
$tipEvenimentText = [
    'nunta' => 'Nuntă',
    'cununie' => 'Cununie',
    'botez' => 'Botez',
    'alt' => 'Alt eveniment'
][$tipEveniment] ?? $tipEveniment;

// Formatează data
$dataFormatata = date('d.m.Y', strtotime($dataEveniment));

// Creează mesajul pentru Telegram
$mesaj = "🎉 *Nouă rezervare - Restaurant Poseidon*\n\n";
$mesaj .= "👤 *Nume:* " . $nume . "\n";
$mesaj .= "📞 *Telefon:* " . $telefon . "\n";
$mesaj .= "🎊 *Tip eveniment:* " . $tipEvenimentText . "\n";
$mesaj .= "📅 *Data evenimentului:* " . $dataFormatata . "\n";
$mesaj .= "🔄 *Data flexibilă:* " . ($dataFlexibila ? 'Da' : 'Nu') . "\n";
$mesaj .= "\n⏰ *Trimis la:* " . date('d.m.Y H:i:s');

// URL pentru Telegram Bot API
$telegramUrl = 'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/sendMessage';

// Datele pentru request
$telegramData = [
    'chat_id' => TELEGRAM_CHAT_ID,
    'text' => $mesaj,
    'parse_mode' => 'Markdown'
];

// Inițializează cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($telegramData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

// Trimite request-ul
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Verifică răspunsul
if ($httpCode === 200) {
    $responseData = json_decode($response, true);
    
    if (isset($responseData['ok']) && $responseData['ok'] === true) {
        http_response_code(200);
        echo json_encode([
            'success' => true, 
            'message' => 'Rezervarea a fost trimisă cu succes! Te vom contacta în scurt timp.'
        ]);
    } else {
        http_response_code(500);
        echo json_encode([
            'success' => false, 
            'message' => 'Eroare la trimiterea mesajului pe Telegram: ' . ($responseData['description'] ?? 'Eroare necunoscută')
        ]);
    }
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Eroare la conectarea la Telegram: ' . ($curlError ?: 'HTTP ' . $httpCode)
    ]);
}
?>

