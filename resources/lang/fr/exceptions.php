<?php

return [
    'daemon_connection_failed' => 'Une erreur s’est produite lors de la tentative de connexion au démon. Veuillez vérifier que le démon est en cours d’exécution et que les informations de connexion sont correctes.',
    'node' => [
        'servers_attached' => 'Vous devez supprimer tous les serveurs associés à ce nœud avant de pouvoir le supprimer.',
        'daemon_off_config_updated' => 'La configuration du démon <strong> a été mise à jour</strong>, mais une erreur s’est produite lors de la tentative de mise à jour automatique du fichier de configuration sur le démon. Vous devrez mettre à jour le fichier de configuration (config.yml) manuellement pour que le démon applique ces changements.',
    ],
    'allocations' => [
        'server_using' => 'Un serveur est actuellement assigné à cette allocation. Une allocation ne peut être supprimée que si aucun serveur n’est actuellement assigné.',
        'too_many_ports' => 'Vous avez tenté d\'ajouter plus de 1000 ports dans une seule plage, ce qui n\'est pas supporté.',
        'invalid_mapping' => 'Le mappage fourni pour :port était invalide et n\'a pas pu être traité.',
        'cidr_out_of_range' => 'La notation CIDR n\'autorise que les masques entre /25 et /32.',
        'port_out_of_range' => 'Les ports dans une allocation doivent être supérieurs à 1024 et inférieurs ou égaux à 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Un Nest avec des serveurs actifs attachés ne peut pas être supprimé du Panel.',
        'egg' => [
            'delete_has_servers' => 'Un Egg avec des serveurs actifs attachés ne peut pas être supprimé du Panel.',
            'invalid_copy_id' => 'L\'Egg sélectionné pour copier un script à partir de l\'un ou l\'autre n\'existe pas, ou est en train de copier un script lui-même.',
            'must_be_child' => 'La directive "Copy Settings From" pour cet Egg doit être une option enfant pour le Nest sélectionné.',
            'has_children' => 'Cet Egg est un parent pour un ou plusieurs autres Eggs. Veuillez supprimer ces Eggs avant de supprimer cet Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'La variable d\'environnement :name doit être unique pour cet Egg.',
            'reserved_name' => 'La variable d\'environnement :name est protégée et ne peut pas être assignée à une variable.',
            'bad_validation_rule' => 'La règle de validation ":rule" n\'est pas une règle valide pour cette application.',
        ],
        'importer' => [
            'json_error' => 'Une erreur s\'est produite lors de la tentative de parsing du fichier JSON: :error.',
            'file_error' => 'Le fichier JSON fourni n\'est pas valide.',
            'invalid_json_provided' => 'Le fichier JSON fourni n\'est pas dans un format reconnaissable.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Vous ne pouvez pas modifier votre propre compte de sous-utilisateur.',
        'user_is_owner' => 'Vous ne pouvez pas ajouter le propriétaire du serveur en tant que sous-utilisateur pour ce serveur.',
        'subuser_exists' => 'Un utilisateur avec cette adresse email est déjà assigné en tant que sous-utilisateur pour ce serveur.',
    ],
    'databases' => [
        'delete_has_databases' => 'Vous ne pouvez pas supprimer un serveur de base de données qui a des bases de données actives liées à celui-ci.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'L\'intervalle maximum pour une tâche enchaînée est de 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Vous ne pouvez pas supprimer un emplacement qui a des nœuds actifs lui sont attachés.',
    ],
    'users' => [
        'node_revocation_failed' => 'Échec de la révocation des clés sur <a href=":link">Nœud #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Aucun nœud satisfaisant les exigences pour le déploiement automatique n\'a été trouvé.',
        'no_viable_allocations' => 'Aucune allocation satisfaisant les exigences pour le déploiement automatique n\'a été trouvée.',
    ],
    'api' => [
        'resource_not_found' => 'La ressource demandée n\'existe pas sur ce serveur.',
    ],
];
