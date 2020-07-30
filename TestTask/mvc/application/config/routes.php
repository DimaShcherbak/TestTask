<?php

return [
    // MainController
    '' => [
        'method' => 'GET',
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index/{page:\d+}' => [
        'method' => 'GET',
        'controller' => 'main',
        'action' => 'index',
    ],
    'about' => [
        'method' => 'GET',
        'controller' => 'main',
        'action' => 'about',
    ],
    'contact' => [
        'method' => 'GET',
        'controller' => 'main',
        'action' => 'contact',
    ],
    'post/{id:\d+}' => [
        'method' => 'GET',
        'controller' => 'main',
        'action' => 'post',
    ],
    // AdminController
    'admin' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'index',
    ],
//    'admin/login' => [
//        'method' => 'GET',
//        'controller' => 'admin',
//        'action' => 'login',
//    ],
    'admin/login' => [
        'method' => 'POST',
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'admin/posts/{page:\d+}' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/posts' => [
        'method' => 'GET',
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/banners' => [
        'method' => 'GET',
        'controller' => 'banners',
        'action' => 'index',
    ],
//    'admin/banners' => [
//        'method' => 'POST',
//        'controller' => 'banners',
//        'action' => 'create',
//    ],
    'admin/banners/add' => [
        'method' => 'GET',
        'controller' => 'banners',
        'action' => 'add',
    ],
    'admin/banners/{id:\d+}' => [
        'method' => 'DELETE',
        'controller' => 'banners',
        'action' => 'delete',
    ],

];