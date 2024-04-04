<?php

// cron :
// 0 */2 * * * /usr/bin/php /home/c1475423c/public_html/test_mail/script.php; echo "killall php" | at now + 1 day

// LE VRAI TRUC A UTILISER
///usr/local/bin/php /home/c1475423c/public_html/test_mail/script.php


// Adresse e-mail de destination
$to = "erwanallot@gmail.com";

// Sujet de l'e-mail
$subject = "Sujet de l'e-mail";

// Corps de l'e-mail
$message = "Contenu de l'e-mail.";

// En-têtes de l'e-mail
$headers = "From: siteweb@erwanallot.com" . "\r\n" .
           "Reply-To: siteweb@erwanallot.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Envoi de l'e-mail
mail($to, $subject, $message, $headers);
?>


