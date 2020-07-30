<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product', '_controller' => 'App\\Controller\\AdminController::adminProduct'], null, null, null, true, false, null]],
        '/admin/product/add' => [[['_route' => 'admin_product_add', '_controller' => 'App\\Controller\\AdminController::adminProductAdd'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'base', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/cart_delete' => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\OrderController::cartDelete'], null, null, null, false, false, null]],
        '/cart/checkout' => [[['_route' => 'cart_checkout', '_controller' => 'App\\Controller\\OrderController::cartCheckout'], null, null, null, false, false, null]],
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
        '/test-email' => [[['_route' => 'test_email', '_controller' => 'App\\Controller\\UserController::testEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/product/(?'
                    .'|update/([^/]++)(*:202)'
                    .'|delete/([^/]++)(*:225)'
                .')'
                .'|/ca(?'
                    .'|rt(?'
                        .'|/(?'
                            .'|add/([^/]++)(*:261)'
                            .'|update\\-quantity/([^/]++)(*:294)'
                        .')'
                        .'|_item_delete/([^/]++)(*:324)'
                    .')'
                    .'|tegory/([^/]++)(*:348)'
                .')'
                .'|/product/([^/]++)(*:374)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'admin_product_update', '_controller' => 'App\\Controller\\AdminController::adminProductUpdate'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\AdminController::adminProductDelete'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\OrderController::cartAdd'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'cart_item_update_quantity', '_controller' => 'App\\Controller\\OrderController::cartItemUpdateQuantity'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'cart_item_delete', '_controller' => 'App\\Controller\\OrderController::cartItemDelete'], ['key'], null, null, false, true, null]],
        348 => [[['_route' => 'category', '_controller' => 'App\\Controller\\ProductController::category'], ['slug'], null, null, false, true, null]],
        374 => [
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::product'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
