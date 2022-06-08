<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/attached/file' => [[['_route' => 'app_attached_file_index', '_controller' => 'App\\Controller\\AttachedFileController::index'], null, ['GET' => 0], null, true, false, null]],
        '/attached/file/new' => [[['_route' => 'app_attached_file_new', '_controller' => 'App\\Controller\\AttachedFileController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compare' => [[['_route' => 'app_compare', '_controller' => 'App\\Controller\\CompareController::index'], null, null, null, false, false, null]],
        '/comparer' => [[['_route' => 'app_comparer_index', '_controller' => 'App\\Controller\\ComparerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comparer/new' => [[['_route' => 'app_comparer_new', '_controller' => 'App\\Controller\\ComparerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deparement' => [[['_route' => 'app_deparement_index', '_controller' => 'App\\Controller\\DeparementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/deparement/new' => [[['_route' => 'app_deparement_new', '_controller' => 'App\\Controller\\DeparementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/incident' => [[['_route' => 'app_incident_index', '_controller' => 'App\\Controller\\IncidentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/incident/new' => [[['_route' => 'app_incident_new', '_controller' => 'App\\Controller\\IncidentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/oracle/tester' => [[['_route' => 'app_oracle_tester_index', '_controller' => 'App\\Controller\\OracleTesterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/oracle/tester/new' => [[['_route' => 'app_oracle_tester_new', '_controller' => 'App\\Controller\\OracleTesterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/task' => [[['_route' => 'app_task_index', '_controller' => 'App\\Controller\\TaskController::index'], null, ['GET' => 0], null, true, false, null]],
        '/task/new' => [[['_route' => 'app_task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/upload' => [[['_route' => 'app_upload_index', '_controller' => 'App\\Controller\\UploadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/upload/new' => [[['_route' => 'app_upload_new', '_controller' => 'App\\Controller\\UploadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/attached/file/([^/]++)(?'
                    .'|(*:33)'
                    .'|/edit(*:45)'
                    .'|(*:52)'
                .')'
                .'|/comparer/([^/]++)(?'
                    .'|(*:81)'
                    .'|/edit(*:93)'
                    .'|(*:100)'
                .')'
                .'|/deparement/([^/]++)(?'
                    .'|(*:132)'
                    .'|/edit(*:145)'
                    .'|(*:153)'
                .')'
                .'|/incident/([^/]++)(?'
                    .'|(*:183)'
                    .'|/edit(*:196)'
                    .'|(*:204)'
                .')'
                .'|/oracle/tester/([^/]++)(?'
                    .'|(*:239)'
                    .'|/edit(*:252)'
                    .'|(*:260)'
                .')'
                .'|/task/([^/]++)(?'
                    .'|(*:286)'
                    .'|/edit(*:299)'
                    .'|(*:307)'
                .')'
                .'|/u(?'
                    .'|pload/([^/]++)(?'
                        .'|(*:338)'
                        .'|/edit(*:351)'
                        .'|(*:359)'
                    .')'
                    .'|ser/([^/]++)(?'
                        .'|(*:383)'
                        .'|/edit(*:396)'
                        .'|(*:404)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:445)'
                    .'|wdt/([^/]++)(*:465)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:511)'
                            .'|router(*:525)'
                            .'|exception(?'
                                .'|(*:545)'
                                .'|\\.css(*:558)'
                            .')'
                        .')'
                        .'|(*:568)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_attached_file_show', '_controller' => 'App\\Controller\\AttachedFileController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_attached_file_edit', '_controller' => 'App\\Controller\\AttachedFileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_attached_file_delete', '_controller' => 'App\\Controller\\AttachedFileController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'app_comparer_show', '_controller' => 'App\\Controller\\ComparerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_comparer_edit', '_controller' => 'App\\Controller\\ComparerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_comparer_delete', '_controller' => 'App\\Controller\\ComparerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_deparement_show', '_controller' => 'App\\Controller\\DeparementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_deparement_edit', '_controller' => 'App\\Controller\\DeparementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'app_deparement_delete', '_controller' => 'App\\Controller\\DeparementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_incident_show', '_controller' => 'App\\Controller\\IncidentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'app_incident_edit', '_controller' => 'App\\Controller\\IncidentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'app_incident_delete', '_controller' => 'App\\Controller\\IncidentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_oracle_tester_show', '_controller' => 'App\\Controller\\OracleTesterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_oracle_tester_edit', '_controller' => 'App\\Controller\\OracleTesterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_oracle_tester_delete', '_controller' => 'App\\Controller\\OracleTesterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'app_task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_upload_show', '_controller' => 'App\\Controller\\UploadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_upload_edit', '_controller' => 'App\\Controller\\UploadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'app_upload_delete', '_controller' => 'App\\Controller\\UploadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        383 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        404 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        465 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        511 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        525 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        545 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        558 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        568 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
