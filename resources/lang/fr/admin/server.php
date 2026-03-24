<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Vous essayez de supprimer l\'allocation par défaut pour ce serveur mais il n\'y a pas d\'allocation de secours à utiliser.',
        'marked_as_failed' => 'Ce serveur a été marqué comme ayant échoué une installation précédente. Le statut actuel ne peut pas être basculé dans cet état.',
        'bad_variable' => 'Il y a eu une erreur de validation avec la variable :name.',
        'daemon_exception' => 'Il y a eu une exception lors de la tentative de communication avec le démon, résultant en un code de réponse HTTP/:code. Cette exception a été enregistrée. (id de requête : :request_id)',
        'default_allocation_not_found' => 'L\'allocation par défaut demandée n\'a pas été trouvée dans les allocations de ce serveur.',
    ],
    'alerts' => [
        'startup_changed' => 'La configuration de démarrage pour ce serveur a été mise à jour. Si le nid ou l\'œuf de ce serveur a été changé, une réinstallation aura lieu maintenant.',
        'server_deleted' => 'Le serveur a été supprimé avec succès du système.',
        'server_created' => 'Le serveur a été créé avec succès sur le panneau. Veuillez accorder au démon quelques minutes pour installer complètement ce serveur.',
        'build_updated' => 'Les détails de construction pour ce serveur ont été mis à jour. Certains changements peuvent nécessiter un redémarrage pour prendre effet.',
        'suspension_toggled' => 'Le statut de suspension du serveur a été changé à :status.',
        'rebuild_on_boot' => 'Ce serveur a été marqué comme nécessitant une reconstruction du conteneur Docker. Cela se produira la prochaine fois que le serveur sera démarré.',
        'install_toggled' => 'Le statut d\'installation pour ce serveur a été basculé.',
        'server_reinstalled' => 'Ce serveur a été mis en file d\'attente pour une réinstallation commençant maintenant.',
        'details_updated' => 'Les détails du serveur ont été mis à jour avec succès.',
        'docker_image_updated' => 'L\'image Docker par défaut à utiliser pour ce serveur a été changée avec succès. Un redémarrage est requis pour appliquer ce changement.',
        'node_required' => 'Vous devez avoir au moins un nœud configuré avant de pouvoir ajouter un serveur à ce panneau.',
        'transfer_nodes_required' => 'Vous devez avoir au moins deux nœuds configurés avant de pouvoir transférer des serveurs.',
        'transfer_started' => 'Le transfert du serveur a été démarré.',
        'transfer_not_viable' => 'Le nœud que vous avez sélectionné n\'a pas l\'espace disque ou la mémoire requis disponible pour accueillir ce serveur.',
    ],
];
