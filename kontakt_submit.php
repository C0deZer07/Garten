<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Hier könnte man die Daten weiterverarbeiten, z. B. per E-Mail senden oder in einer Datenbank speichern.
    echo "<h1>Vielen Dank für Ihre Nachricht, $name!</h1>";
    echo "<p>Wir werden uns in Kürze bei Ihnen melden.</p>";
    echo "<h2>Ihre Nachricht:</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Nachricht:</strong> $message</p>";
} else {
    echo "<h1>Ungültige Anfrage</h1>";
}
?>
