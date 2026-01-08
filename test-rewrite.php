<?php
// Test file to check if rewrite rules are working
echo "<h1>Rewrite Test</h1>";
echo "<p><strong>REQUEST_URI:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
echo "<p><strong>SCRIPT_NAME:</strong> " . $_SERVER['SCRIPT_NAME'] . "</p>";
echo "<p><strong>PATH_INFO:</strong> " . (isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : 'N/A') . "</p>";
echo "<p><strong>PHP_SELF:</strong> " . $_SERVER['PHP_SELF'] . "</p>";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = array_filter(explode('/', trim($path, '/')), function($part) {
    return !empty($part);
});
$pathParts = array_values($pathParts);

echo "<p><strong>Path Parts:</strong> ";
print_r($pathParts);
echo "</p>";

$currentLang = 'ro';
if (!empty($pathParts)) {
    $lastPart = end($pathParts);
    if ($lastPart === 'ro' || $lastPart === 'ru') {
        $currentLang = $lastPart;
    }
}

echo "<p><strong>Detected Language:</strong> " . $currentLang . "</p>";
?>

