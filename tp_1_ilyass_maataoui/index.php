<?php
function validerMotDePasse($motDePasse) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // Définir le "salt"
    $salt = "ABC1234@";

    // Concaténer le "salt" avec le mot de passe
    $motDePasseConcatene = $motDePasse . $salt;

    // Chiffrer le mot de passe (vous pouvez utiliser une fonction de hachage comme SHA-256 ici)
    $motDePasseChiffre = hash('sha256', $motDePasseConcatene);

    // Simuler un mot de passe correct
    $motDePasseCorrect = hash('sha256', "MotDePasse1234@" . $salt);

    // Comparer le mot de passe fourni avec le mot de passe correct
    if ($motDePasseChiffre === $motDePasseCorrect) {
        return "Mot de passe correct ! Salt : $salt Mot de passe chiffré : $motDePasseChiffre";
    } else {
        return "Mot de passe incorrect !";
    }
}

// Exemple d'utilisation de la fonction
$motDePasse = "MonMotDePasse";
$resultat = validerMotDePasse($motDePasse);
echo $resultat;
?>