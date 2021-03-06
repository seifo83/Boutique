<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin_product' => [[], ['_controller' => 'App\\Controller\\AdminController::adminProduct'], [], [['text', '/admin/product/']], [], []],
    'admin_product_add' => [[], ['_controller' => 'App\\Controller\\AdminController::adminProductAdd'], [], [['text', '/admin/product/add']], [], []],
    'admin_product_update' => [['id'], ['_controller' => 'App\\Controller\\AdminController::adminProductUpdate'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product/update']], [], []],
    'admin_product_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::adminProductDelete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product/delete']], [], []],
    'base' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/base']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/panier']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\OrderController::cartAdd'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_delete' => [[], ['_controller' => 'App\\Controller\\OrderController::cartDelete'], [], [['text', '/cart_delete']], [], []],
    'cart_item_delete' => [['key'], ['_controller' => 'App\\Controller\\OrderController::cartItemDelete'], [], [['variable', '/', '[^/]++', 'key'], ['text', '/cart_item_delete']], [], []],
    'cart_item_update_quantity' => [['id'], ['_controller' => 'App\\Controller\\OrderController::cartItemUpdateQuantity'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/update-quantity']], [], []],
    'cart_checkout' => [[], ['_controller' => 'App\\Controller\\OrderController::cartCheckout'], [], [['text', '/cart/checkout']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/']], [], []],
    'product' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::product'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/product']], [], []],
    'category' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::category'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/category']], [], []],
    'recherche' => [[], ['_controller' => 'App\\Controller\\ProductController::search'], [], [['text', '/recherche/']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/inscription']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/connexion']], [], []],
    'login_check' => [[], ['_controller' => 'App\\Controller\\UserController::loginCheck'], [], [['text', '/connexion_check']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/deconnexion']], [], []],
    'test_email' => [[], ['_controller' => 'App\\Controller\\UserController::testEmail'], [], [['text', '/test-email']], [], []],
];
