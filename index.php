<?php
function validatorMDP($password) {
    if (strlen($password) < 6 || strlen($password) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caracteres";
    }
    $Salt = "ABC1234@";
    $passwordConcatene = $password . $Salt;
    $crypt_password = hash('sha256', $passwordConcatene);
    $True_password = hash('sha256', "MotDePasse1234@" . $Salt);

    if ($crypt_password === $True_password ) {
        return "Mot de passe correct ! Salt : $Salt Mot de passe chiffré : $crypt_password";
    } else {
        return "Mot de passe incorrect !";
    }
}
$result = validatorMDP($password);
echo $result;

?>