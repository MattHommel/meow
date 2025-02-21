<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail du destinataire
    $destinataire = "votre-email@example.com"; // Remplacez par votre e-mail

    // Sujet du mail
    $sujet = "Nouveau message de " . $nom;

    // Contenu du mail
    $message_email = "Nom : " . $nom . "\n";
    $message_email .= "E-mail : " . $email . "\n";
    $message_email .= "Message : " . $message . "\n";

    // En-têtes
    $headers = "From: " . $email;

    // Envoi du mail
    if (mail($destinataire, $sujet, $message_email, $headers)) {
        echo "Le message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue. Le message n'a pas pu être envoyé.";
    }
}
?>
