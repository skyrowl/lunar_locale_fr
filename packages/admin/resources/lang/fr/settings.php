<?php

return [
    /**
     * Channels.
     */
    'channels.index.title' => 'Canaux',
    'channels.index.create_btn' => 'Créer un canal',
    'channels.index.table_row_action_text' => 'Modifier le canal',
    /**
     * Channels show page.
     */
    'channels.show.title' => 'Modifier le canal',
    /**
     * Channels create page.
     */
    'channels.create.title' => 'Créer un canal',
    /**
     * Settings layout.
     */
    'layout.menu_btn' => 'Menu des paramètres',
    /**
     * Staff listing page.
     */
    'staff.index.title' => 'Personnel',
    'staff.index.search_placeholder' => 'Rechercher un membre du personnel',
    'staff.index.active_filter' => 'Afficher les inactifs',
    'staff.index.create_btn' => 'Ajouter un membre du personnel',
    'staff.index.table_row_action_text' => 'Modifier le membre du personnel',
    /**
     * Staff show page.
     */
    'staff.show.title' => 'Modifier le membre du personnel',
    'staff.show.delete_btn' => 'Désactiver le compte',
    'staff.show.delete_title' => 'Supprimer le membre du personnel',
    'staff.show.restore_title' => 'Restaurer le membre du personnel',
    /**
     * Staff create page.
     */
    'staff.create.title' => 'Créer un membre du personnel',
    /**
     * Staff form.
     */
    'staff.form.create_btn' => 'Créer un membre du personnel',
    'staff.form.update_btn' => 'Mettre à jour le membre du personnel',
    'staff.form.permissions_heading' => 'Autorisations',
    'staff.form.permissions_description' => 'Gérer les autorisations individuelles des membres du personnel.',
    'staff.form.admin_message' => 'Un utilisateur admin a accès à toutes les permissions.',
    'staff.form.danger_zone.label' => 'Supprimer un membre du personnel',
    'staff.form.danger_zone.delete_strapline' => 'La suppression d\'un membre du personnel enlèvera tout accès au hub, vous pourrez le restaurer plus tard.',
    'staff.form.danger_zone.restore_strapline' => 'Restaurez le compte de ce membre du personnel afin qu\'il puisse accéder au hub.',
    'staff.form.danger_zone.own_account' => 'La suppression de votre propre compte vous déconnectera instantanément.',

    /**
     * Addons listing page.
     */
    'addons.index.title' => 'Modules',
    'addons.index.table_row_action_text' => 'Voir',
    /**
     * Addons show page.
     */
    'addons.show.title' => 'Module',
    /*
     * Languages listing page.
     */
    'languages.index.title' => 'Langues',
    'languages.index.create_btn' => 'Créer une langue',
    'languages.index.table_row_action_text' => 'Modifier la langue',
    /**
     * Languages create page.
     */
    'languages.create.title' => 'Créer une langue',
    /**
     * Languages show page.
     */
    'languages.show.title' => 'Modifier la langue',
    /**
     * Language form.
     */
    'languages.form.create_btn' => 'Créer une langue',
    'languages.form.update_btn' => 'Mettre à jour la langue',
    'languages.form.default_instructions' => 'Définissez si cette langue est la langue par défaut, cela remplacera la langue par défaut actuelle.',
    /**
     * Currencies table.
     */
    'currencies.index.title' => 'Devises',
    'currencies.index.table_row_action_text' => 'Modifier',
    'currencies.index.no_results' => 'Vous n\'avez actuellement aucune devise dans le système.',
    /**
     * Currency show page.
     */
    'currencies.show.title' => 'Modifier la devise',
    /**
     * Currency create page.
     */
    'currencies.create.title' => 'Créer une devise',
    'currencies.index.create_currency_btn' => 'Créer une devise',
    /**
     * Currency form.
     */
    'currencies.form.update_btn' => 'Mettre à jour la devise',
    'currencies.form.create_btn' => 'Créer une devise',
    'currencies.form.notify.created' => 'Devise créée',
    'currencies.form.format_help_text' => [
        'Cela vous permet de spécifier le format que les champs de prix doivent utiliser pour cette devise.',
        'Lors de l\'affichage, Lunar remplacera <code>{value}</code> par le prix formaté. Par exemple <code>£{value}</code>.',
        'Vous devez toujours inclure <code>{value}</code> pour que cela fonctionne correctement.',
    ],
    /**
     * Attributes.
     */
    'attributes.index.title' => 'Attributs',
    'attributes.show.title' => 'Modifier les attributs de :type',
    'attributes.show.locked' => 'Cet attribut est requis par le système et a donc été verrouillé pour modification.',
    'attributes.create.title' => 'Créer un attribut',
    'attributes.form.update_btn' => 'Mettre à jour l\'attribut',
    'attributes.form.create_btn' => 'Créer un attribut',
    'attributes.form.notify.created' => 'Attribut créé',
    /**
     * Tags.
     */
    'tags.show.title' => 'Modifier le tag',
    'tags.index.title' => 'Tags',
    'tags.index.table_row_action_text' => 'Modifier',
    'tags.form.update_btn' => 'Mettre à jour le Tag',
    'tags.form.create_btn' => 'Créer un Tag',
    'tags.form.notify.updated' => 'Tag mis à jour',
    /**
     * Activity log page.
     */
    'activity_log.index.title' => 'Journal d\'activité',

    /**
     * Taxes.
     */
    'taxes.tax-zones.index.title' => 'Zones fiscales',
    'taxes.tax-zones.confirm_delete.title' => 'Confirmer la suppression',
    'taxes.tax-zones.confirm_delete.message' => 'Êtes-vous sûr de vouloir supprimer cette zone fiscale? Cela pourrait entraîner une perte de données.',
    'taxes.tax-zones.customer_groups.title' => 'Restreindre aux groupes de clients',
    'taxes.tax-zones.customer_groups.instructions' => 'Sélectionnez les groupes de clients auxquels vous souhaitez limiter cette zone. Laissez décoché pour aucune restriction.',
    'taxes.tax-zones.create_title' => 'Créer une zone fiscale',
    'taxes.tax-zones.create_btn' => 'Créer une zone fiscale',
    'taxes.tax-zones.delete_btn' => 'Supprimer la zone fiscale',
    'taxes.tax-zones.index.table_row_action_text' => 'Gérer',
    'taxes.tax-classes.index.title' => 'Classes de taxes',
    'taxes.tax-classes.index.create.title' => 'Créer une classe de taxes',
    'taxes.tax-classes.index.update.title' => 'Mettre à jour la classe fiscale',
    'taxes.tax-classes.create_btn' => 'Créer une classe de taxes',
    'taxes.tax-zones.price_display.label' => 'Affichage des prix',
    'taxes.tax-zones.price_display.excl_tax' => 'Exclure les taxes',
    'taxes.tax-zones.price_display.incl_tax' => 'Inclure la taxe',
    'taxes.tax-zones.zone_type.countries' => 'Limiter aux pays',
    'taxes.tax-zones.zone_type.states' => 'Limiter aux états/provinces',
    'taxes.tax-zones.zone_type.postcodes' => 'Limiter aux codes postaux',
    'taxes.tax-zones.tax_rates.title' => 'Taux d\'imposition',
    'taxes.tax-zones.tax_rates.create_button' => 'Ajouter un taux de taxe',
    'taxes.tax-zones.save_btn' => 'Enregistrer la zone fiscale',
    'taxes.tax-classes.index.delete_message' => 'Êtes-vous sûr ? Cela pourrait entraîner une perte de données.',
    'taxes.tax-classes.index.delete_message_disabled' => 'Vous ne pouvez pas supprimer une classe de taxe associée à des variantes de produit',
    'taxes.tax-classes.index.delete_message_default' => 'Vous devez sélectionner un nouveau défaut avant de supprimer',
    /**
     * Customer Groups.
     */
    'customer-groups.index.title' => 'Groupes de clients',
    'customer-groups.index.create_btn' => 'Créer un groupe de clients',
    'customer-groups.index.table_row_action_text' => 'Modifier le groupe',
    /**
     * Customer Groups show page.
     */
    'customer-groups.show.title' => 'Modifier le groupe de clients',
    /**
     * Customer Groups create page.
     */
    'customer-groups.create.title' => 'Créer un groupe de clients',
    'customer-groups.form.default_instructions' => 'Définir si ce groupe de clients doit être le groupe par défaut',
];
