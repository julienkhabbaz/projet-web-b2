<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'commande_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCommandeController::index'], [], [['text', '/admin/commande/']], [], []],
    'commande_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCommandeController::new'], [], [['text', '/admin/commande/new']], [], []],
    'commande_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commande']], [], []],
    'commande_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commande']], [], []],
    'commande_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCommandeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commande']], [], []],
    'admin_dash' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminDashController::index'], [], [['text', '/admin/dash']], [], []],
    'plat_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPlatController::index'], [], [['text', '/admin/plat/']], [], []],
    'plat_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPlatController::new'], [], [['text', '/admin/plat/new']], [], []],
    'plat_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPlatController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/plat']], [], []],
    'plat_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPlatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/plat']], [], []],
    'plat_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPlatController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/plat']], [], []],
    'restaurant_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::index'], [], [['text', '/admin/restaurant/']], [], []],
    'restaurant_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::new'], [], [['text', '/admin/restaurant/new']], [], []],
    'restaurant_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/restaurant']], [], []],
    'restaurant_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/restaurant']], [], []],
    'restaurant_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/restaurant']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], [], [['text', '/admin/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::new'], [], [['text', '/admin/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\Client\\EspaceCLientController::profile'], [], [['text', '/profile']], [], []],
    'profile_edit' => [['id'], ['_controller' => 'App\\Controller\\Client\\EspaceCLientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/profile']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'liste_restaurants' => [[], ['_controller' => 'App\\Controller\\FrontController::ListRestaurant'], [], [['text', '/restaurants']], [], []],
    'detail_restaurant' => [['id'], ['_controller' => 'App\\Controller\\FrontController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], []],
    'commander' => [['id'], ['_controller' => 'App\\Controller\\FrontController::Commander'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande/new']], [], []],
    'type_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::type'], [], [['text', '/register']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register_client']], [], []],
    'restaurant_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerRestaurant'], [], [['text', '/register_restaurant']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], []],
    'espace_restaurant' => [[], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::index'], [], [['text', '/espace_restaurant/dash']], [], []],
    'mes_restaurants' => [[], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::listeRestaurants'], [], [['text', '/espace_restaurant/restaurants']], [], []],
    'mes_plats_restaurants' => [[], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::listePlats'], [], [['text', '/espace_restaurant/plats']], [], []],
    'restaurants_new' => [[], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::newRestaurant'], [], [['text', '/espace_restaurant/restaurant_new']], [], []],
    'restaurants_edit' => [['id'], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::editRestaurant'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/espace_restaurant']], [], []],
    'restaurants_delete' => [['id'], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::deleteRestaurant'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace_restaurant/restaurant']], [], []],
    'plats_new' => [[], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::newPLat'], [], [['text', '/espace_restaurant/plat_new']], [], []],
    'plats_edit' => [['id'], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::editPlat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace_restaurant']], [], []],
    'plats_delete' => [['id'], ['_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::deletePlat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace_restaurant']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
