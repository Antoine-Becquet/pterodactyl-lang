<?php

return [
    'sign_in' => 'Se connecter',
    'go_to_login' => 'Aller à la page de connexion',
    'failed' => 'Aucun compte correspondant à ces identifiants n\'a pu être trouvé.',

    'forgot_password' => [
        'label' => 'Mot de passe oublié?',
        'label_help' => 'Entrez l\'adresse email de votre compte pour recevoir les instructions de réinitialisation de votre mot de passe.',
        'button' => 'Récupérer le compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialiser et se connecter',
    ],

    'two_factor' => [
        'label' => 'Jeton d\'authentification à deux facteurs',
        'label_help' => 'Ce compte requiert une couche supplémentaire d\'authentification afin de continuer. Veuillez entrer le code généré par votre appareil pour compléter cette connexion.',
        'checkpoint_failed' => 'Le jeton d\'authentification à deux facteurs était invalide.',
    ],

    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit comporter au moins 8 caractères et être unique pour ce site.',
    '2fa_must_be_enabled' => 'L\'administrateur a exigé que l\'authentification à deux facteurs soit activée pour votre compte afin d\'utiliser le Panel.',
];
