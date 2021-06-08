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
        '/campers' => [[['_route' => 'campers_index', '_controller' => 'App\\Controller\\CampersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/campers/new' => [[['_route' => 'campers_new', '_controller' => 'App\\Controller\\CampersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comentario' => [[['_route' => 'comentario_index', '_controller' => 'App\\Controller\\ComentarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/csv_email' => [[['_route' => 'csv_email', '_controller' => 'App\\Controller\\CsvController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/ocultarComentario' => [[['_route' => 'ocultarComentario', '_controller' => 'App\\Controller\\MainController::ocultarComentario'], null, ['GET' => 0], null, false, false, null]],
        '/listCampers' => [[['_route' => 'listCampers', '_controller' => 'App\\Controller\\MainController::allCampers'], null, null, null, false, false, null]],
        '/listRoutes' => [[['_route' => 'listRoutes', '_controller' => 'App\\Controller\\MainController::allRoutes'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reserva' => [[['_route' => 'reserva_index', '_controller' => 'App\\Controller\\ReservaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reserva/new' => [[['_route' => 'reserva_new', '_controller' => 'App\\Controller\\ReservaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rute' => [[['_route' => 'rute_index', '_controller' => 'App\\Controller\\RuteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rute/new' => [[['_route' => 'rute_new', '_controller' => 'App\\Controller\\RuteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|ampers/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|omentario/(?'
                        .'|new/([^/]++)(*:247)'
                        .'|([^/]++)(?'
                            .'|(*:266)'
                            .'|/edit(*:279)'
                            .'|(*:287)'
                        .')'
                    .')'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|ad(?'
                            .'|Camper/([^/]++)(*:327)'
                            .'|Route/([^/]++)(*:349)'
                        .')'
                        .'|serva/([^/]++)(?'
                            .'|(*:375)'
                            .'|/edit(*:388)'
                            .'|(*:396)'
                        .')'
                    .')'
                    .'|ute/([^/]++)(?'
                        .'|(*:421)'
                        .'|/edit(*:434)'
                        .'|(*:442)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:469)'
                    .'|/edit(*:482)'
                    .'|(*:490)'
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
        192 => [[['_route' => 'campers_show', '_controller' => 'App\\Controller\\CampersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'campers_edit', '_controller' => 'App\\Controller\\CampersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'campers_delete', '_controller' => 'App\\Controller\\CampersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'comentario_new', '_controller' => 'App\\Controller\\ComentarioController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        266 => [[['_route' => 'comentario_show', '_controller' => 'App\\Controller\\ComentarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'comentario_edit', '_controller' => 'App\\Controller\\ComentarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'comentario_delete', '_controller' => 'App\\Controller\\ComentarioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        327 => [[['_route' => 'readCamper/{id}', '_controller' => 'App\\Controller\\MainController::readCamper'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'readRoute/{id}', '_controller' => 'App\\Controller\\MainController::readRoute'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'reserva_show', '_controller' => 'App\\Controller\\ReservaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'reserva_edit', '_controller' => 'App\\Controller\\ReservaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'reserva_delete', '_controller' => 'App\\Controller\\ReservaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        421 => [[['_route' => 'rute_show', '_controller' => 'App\\Controller\\RuteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'rute_edit', '_controller' => 'App\\Controller\\RuteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'rute_delete', '_controller' => 'App\\Controller\\RuteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        469 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        490 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
