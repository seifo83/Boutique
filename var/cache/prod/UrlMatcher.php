<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/product' => [[['_route' => 'admin_product', '_controller' => 'App\\Controller\\AdminController::adminProduct'], null, null, null, true, false, null]],
        '/admin/product/add' => [[['_route' => 'admin_product_add', '_controller' => 'App\\Controller\\AdminController::adminProductAdd'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'base', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/cart_delete' => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\OrderController::cartDelete'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null],
            [['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null],
        ],
        '/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\ProductController::search'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/connexion_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\UserController::loginCheck'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/product/(?'
                    .'|update/([^/]++)(*:40)'
                    .'|delete/([^/]++)(*:62)'
                .')'
                .'|/ca(?'
                    .'|rt(?'
                        .'|/add/([^/]++)(*:94)'
                        .'|_item_delete/([^/]++)(*:122)'
                    .')'
                    .'|tegory/([^/]++)(*:146)'
                .')'
                .'|/product/([^/]++)(*:172)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'admin_product_update', '_controller' => 'App\\Controller\\AdminController::adminProductUpdate'], ['id'], null, null, false, true, null]],
        62 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\AdminController::adminProductDelete'], ['id'], null, null, false, true, null]],
        94 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\OrderController::cartAdd'], ['id'], null, null, false, true, null]],
        122 => [[['_route' => 'cart_item_delete', '_controller' => 'App\\Controller\\OrderController::cartItemDelete'], ['key'], null, null, false, true, null]],
        146 => [[['_route' => 'category', '_controller' => 'App\\Controller\\ProductController::category'], ['slug'], null, null, false, true, null]],
        172 => [
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::product'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
