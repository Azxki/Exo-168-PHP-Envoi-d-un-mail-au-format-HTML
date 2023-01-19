<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'j.conan@fondationface.org',
    'cococoursan@gmail.com',
];


$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                Bienvenue, message de ma newletter;
            </div>
        </body>
    </html>
';

$subject = 'Newletter';
$header = array(
    'Reply-To' => 'azxki01@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion(),
    'Mine-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8'
);

foreach ($to as $value){
    mail($value, $subject, $html, $header, "-f azxki01@gmail.com");
}
