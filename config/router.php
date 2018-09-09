<?php

/**
 * Файл в котором находятся роуты приложения...
 */

return [

    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],


    'auth/login' => [
        'controller' => 'auth',
        'action' => 'login'
    ],

    'main/dictionary' => [
        'controller' => 'main',
        'action' => 'dictionary'
    ],

    'dictionary/add' => [
        'controller' => 'dictionary',
        'action' => 'add'
    ],

    'dictionary/show/\d+' => [
        'controller' => 'dictionary',
        'action' => 'show'
    ],

    'dictionary/update/\d+' => [
        'controller' => 'dictionary',
        'action' => 'update'
    ],

    'dictionary/delete/\d+' => [
        'controller' => 'dictionary',
        'action' => 'delete'
    ],
];