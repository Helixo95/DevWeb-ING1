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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/contacts' => [[['_route' => 'app_admin_contacts', '_controller' => 'App\\Controller\\Admin\\AdminContactsController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'app_admin_product_create', '_controller' => 'App\\Controller\\Admin\\AdminCreateController::createProduct'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'app_admin_products', '_controller' => 'App\\Controller\\Admin\\AdminProductsController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\Admin\\AdminUsersController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/register' => [[['_route' => 'cart_register', '_controller' => 'App\\Controller\\CartController::cart_register'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/guidlines' => [[['_route' => 'app_guidlines', '_controller' => 'App\\Controller\\HomeController::guidlines'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\HomeController::signin'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\HomeController::profile'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/modif_profile' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileModifController::edit'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|product/(?'
                        .'|(\\d+)(*:195)'
                        .'|delete/(\\d+)(*:215)'
                    .')'
                    .'|user/(?'
                        .'|([^/]++)(*:240)'
                        .'|change\\-(?'
                            .'|role/([^/]++)(*:272)'
                            .'|status/([^/]++)(*:295)'
                        .')'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:327)'
                    .'|min/([^/]++)(*:347)'
                    .'|remove/([^/]++)(*:370)'
                .')'
                .'|/product(?'
                    .'|(?:/([^/]++)(?:/([^/]++))?)?(*:418)'
                    .'|/add(?'
                        .'|/([^/]++)(*:442)'
                        .'|2/([^/]++)(*:460)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'app_admin_product', '_controller' => 'App\\Controller\\Admin\\AdminProductController::editProduct'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'app_admin_product_delete', '_controller' => 'App\\Controller\\Admin\\AdminProductController::deleteProduct'], ['id'], ['POST' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'change_role', '_controller' => 'App\\Controller\\Admin\\AdminUserController::changeRole'], ['id'], ['POST' => 0], null, false, true, null]],
        295 => [[['_route' => 'change_status', '_controller' => 'App\\Controller\\Admin\\AdminUserController::changeStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        327 => [[['_route' => 'cart_Add', '_controller' => 'App\\Controller\\CartController::cart_Add'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'cart_Min', '_controller' => 'App\\Controller\\CartController::cart_Min'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::cart_remove'], ['id'], null, null, false, true, null]],
        418 => [[['_route' => 'app_product_category_brand', 'category' => null, 'brand' => null, '_controller' => 'App\\Controller\\ProductController::categoryBrand'], ['category', 'brand'], null, null, false, true, null]],
        442 => [[['_route' => 'add_cart', '_controller' => 'App\\Controller\\ProductController::add_cart'], ['id'], null, null, false, true, null]],
        460 => [
            [['_route' => 'add_cart2', '_controller' => 'App\\Controller\\ProductController::add_cart2'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
