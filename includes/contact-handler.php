<?php
// Empêche l'accès direct
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

// Configuration
$to = 'contact@nat-patoune.ch';
$subject = 'Nouvelle demande de garde - Nat\'Patoune';
$headers = "From: noreply@nat-patoune.ch\r\n";
$headers .= "Reply-To: " . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Validation honeypot
if (!empty($_POST['website'])) {
    die('Spam détecté');
}

// Validation des champs requis
$required = ['nom', 'email', 'telephone', 'ville', 'date_start', 'date_end', 'consent'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        die('Veuillez remplir tous les champs obligatoires');
    }
}

// Validation email
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Email invalide');
}

// Validation téléphone (format suisse simple)
$phone = preg_replace('/\D/', '', $_POST['telephone']);
if (strlen($phone) < 9 || strlen($phone) > 12) {
    die('Numéro de téléphone invalide');
}

// Préparation des données
$nom = htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8');
$telephone = htmlspecialchars(trim($_POST['telephone']), ENT_QUOTES, 'UTF-8');
$ville = htmlspecialchars(trim($_POST['ville']), ENT_QUOTES, 'UTF-8');
$date_start = htmlspecialchars(trim($_POST['date_start']), ENT_QUOTES, 'UTF-8');
$date_end = htmlspecialchars(trim($_POST['date_end']), ENT_QUOTES, 'UTF-8');
$chats = htmlspecialchars(trim($_POST['chats'] ?? 'Non spécifié'), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

// Construction du message
$body = "NOUVELLE DEMANDE DE GARDE\n";
$body .= "========================\n\n";
$body .= "Nom : $nom\n";
$body .= "Email : $email\n";
$body .= "Téléphone : $telephone\n";
$body .= "Ville : $ville\n";
$body .= "Période : du $date_start au $date_end\n";
$body .= "Nombre de chats : $chats\n\n";
if (!empty($message)) {
    $body .= "Message :\n$message\n\n";
}
$body .= "Consentement : Oui\n";
$body .= "IP : " . $_SERVER['REMOTE_ADDR'] . "\n";
$body .= "Date : " . date('d.m.Y H:i:s');

// Envoi de l'email
if (mail($to, $subject, $body, $headers)) {
    // Redirection avec message de succès
    header('Location: /#contact?status=success');
} else {
    // Redirection avec message d'erreur
    header('Location: /#contact?status=error');
}
exit;
?>