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
        '/Login' => [[['_route' => 'admin_login_action', '_controller' => 'App\\Controller\\AdminController::Login'], null, null, null, false, false, null]],
        '/Admin_Dashboard' => [[['_route' => 'admin_homepage_action', '_controller' => 'App\\Controller\\AdminController::Admin_Index'], null, null, null, false, false, null]],
        '/Admin_Logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\AdminController::Admin_Logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/FrontMenu' => [[['_route' => 'front_menu', '_controller' => 'App\\Controller\\FrontController::FrontMenu'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'user_login_action', '_controller' => 'App\\Controller\\FrontController::UserLogin'], null, null, null, false, false, null]],
        '/Register' => [[['_route' => 'users_register', '_controller' => 'App\\Controller\\FrontController::UsersRegister'], null, null, null, false, false, null]],
        '/Users_Logout' => [[['_route' => 'users_logout', '_controller' => 'App\\Controller\\FrontController::Users_Logout'], null, null, null, false, false, null]],
        '/Restaurants' => [[['_route' => 'front_restaurants_list', '_controller' => 'App\\Controller\\FrontController::Front_Restaurants_LISt'], null, null, null, false, false, null]],
        '/Admin_Restaurant' => [[['_route' => 'admin_restaurant', '_controller' => 'App\\Controller\\RestaurantController::Restaurant'], null, null, null, false, false, null]],
        '/Admin_Restaurant_Insert' => [[['_route' => 'admin_restaurant_insert', '_controller' => 'App\\Controller\\RestaurantController::Restaurant_Insert'], null, null, null, false, false, null]],
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
                .'|/Admin_Restaurant_Update/([^/]++)(*:202)'
                .'|/Restaurant_Delete/([^/]++)(*:237)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'admin_restaurant_update', '_controller' => 'App\\Controller\\RestaurantController::Restaurant_Update'], ['id'], null, null, false, true, null]],
        237 => [
            [['_route' => 'admin_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::Restaurant_Delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
