<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin_contacts' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminContactsController::index'], [], [['text', '/admin/contacts']], [], [], []],
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::dashboard'], [], [['text', '/admin']], [], [], []],
    'app_admin_product_create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCreateController::createProduct'], [], [['text', '/admin/product/create']], [], [], []],
    'app_admin_product' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminProductController::editProduct'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_admin_product_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminProductController::deleteProduct'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/product/delete']], [], [], []],
    'app_admin_products' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminProductsController::index'], [], [['text', '/admin/products']], [], [], []],
    'app_admin_user' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'change_role' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::changeRole'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/change-role']], [], [], []],
    'change_status' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::changeStatus'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user/change-status']], [], [], []],
    'app_admin_users' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUsersController::index'], [], [['text', '/admin/users']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'cart_Add' => [['id'], ['_controller' => 'App\\Controller\\CartController::cart_Add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'cart_Min' => [['id'], ['_controller' => 'App\\Controller\\CartController::cart_Min'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/min']], [], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::cart_remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/remove']], [], [], []],
    'cart_register' => [[], ['_controller' => 'App\\Controller\\CartController::cart_register'], [], [['text', '/cart/register']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_guidlines' => [[], ['_controller' => 'App\\Controller\\HomeController::guidlines'], [], [['text', '/guidlines']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/home']], [], [], []],
    'app_signin' => [[], ['_controller' => 'App\\Controller\\HomeController::signin'], [], [['text', '/signin']], [], [], []],
    'app_profile' => [[], ['_controller' => 'App\\Controller\\HomeController::profile'], [], [['text', '/profile']], [], [], []],
    'app_product_category_brand' => [['category', 'brand'], ['category' => null, 'brand' => null, '_controller' => 'App\\Controller\\ProductController::categoryBrand'], [], [['variable', '/', '[^/]++', 'brand', true], ['variable', '/', '[^/]++', 'category', true], ['text', '/product']], [], [], []],
    'add_cart' => [['id'], ['_controller' => 'App\\Controller\\ProductController::add_cart'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/add']], [], [], []],
    'add_cart2' => [['id'], ['_controller' => 'App\\Controller\\ProductController::add_cart2'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/add2']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], [], []],
    'profile_edit' => [[], ['_controller' => 'App\\Controller\\ProfileModifController::edit'], [], [['text', '/modif_profile']], [], [], []],
];
