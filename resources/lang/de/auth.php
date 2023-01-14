<?php

return [
    'failed' => 'Diese Anmeldedaten stimmen nicht mit den hinterlegten Daten überein.',
    'throttle' => 'Zu viele Anmeldeversuche. Bitte versuchen Sie es erneut in :seconds Sekunden.',
    'site_title' => 'curriculum',
    'userManagement' => [
        'title' => 'Benutzerverwaltung',
        'title_singular' => 'Benutzerverwaltung',
        'fields' => [],
    ],
    'permission' => [
        'title' => 'Berechtigungen',
        'title_singular' => 'Berechtigung',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'title' => 'Titel',
            'title_helper' => '',
            'created_at' => 'Erstellt am',
            'created_at_helper' => '',
            'updated_at' => 'Aktualisiert am',
            'updated_at_helper' => '',
            'deleted_at' => 'Gelöscht am',
            'deleted_at_helper' => '',
        ],
    ],
    'role' => [
        'title' => 'Rollen',
        'title_singular' => 'Rolle',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'title' => 'Title',
            'title_helper' => '',
            'permissions' => 'Berechtigungen',
            'permissions_helper' => '',
            'created_at' => 'Erstellt am',
            'created_at_helper' => '',
            'updated_at' => 'Aktualisiert am',
            'updated_at_helper' => '',
            'deleted_at' => 'Gelöscht am',
            'deleted_at_helper' => '',
        ],
    ],
    'user' => [
        'title' => 'Benutzer',
        'title_singular' => 'Benutzer',
        'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Name',
            'name_helper' => '',
            'email' => 'E-Mail',
            'email_helper' => '',
            'email_verified_at' => 'E-Mail verifiziert am',
            'email_verified_at_helper' => '',
            'password' => 'Passwort',
            'password_helper' => '',
            'roles' => 'Rollen',
            'roles_helper' => '',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => '',
            'created_at' => 'Erstellt am',
            'created_at_helper' => '',
            'updated_at' => 'Aktualisiert am',
            'updated_at_helper' => '',
            'deleted_at' => 'Gelöscht am',
            'deleted_at_helper' => '',
        ],
    ],
];
