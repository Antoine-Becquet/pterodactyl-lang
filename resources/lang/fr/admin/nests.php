<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Un nouveau nid, :name, a été créé avec succès.',
        'deleted' => 'Le nid demandé a été supprimé avec succès du panneau.',
        'updated' => 'Les options de configuration du nid ont été mises à jour avec succès.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Cet œuf et ses variables associées ont été importés avec succès.',
            'updated_via_import' => 'Cet œuf a été mis à jour en utilisant le fichier fourni.',
            'deleted' => 'L\'œuf demandé a été supprimé avec succès du panneau.',
            'updated' => 'La configuration de l\'œuf a été mise à jour avec succès.',
            'script_updated' => 'Le script d\'installation de l\'œuf a été mis à jour et s\'exécutera chaque fois que des serveurs seront installés.',
            'egg_created' => 'Un nouvel œuf a été pondu avec succès. Vous devrez redémarrer tous les démons en cours d\'exécution pour appliquer ce nouvel œuf.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'La variable ":variable" a été supprimée et ne sera plus disponible pour les serveurs une fois reconstruits.',
            'variable_updated' => 'La variable ":variable" a été mise à jour. Vous devrez reconstruire tous les serveurs utilisant cette variable afin d\'appliquer les changements.',
            'variable_created' => 'Une nouvelle variable a été créée avec succès et assignée à cet œuf.',
        ],
    ],
];
