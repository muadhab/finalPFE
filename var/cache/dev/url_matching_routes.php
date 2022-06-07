<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/attached/file' => [[['_route' => 'app_attached_file_index', '_controller' => 'App\\Controller\\AttachedFileController::index'], null, ['GET' => 0], null, true, false, null]],
        '/attached/file/new' => [[['_route' => 'app_attached_file_new', '_controller' => 'App\\Controller\\AttachedFileController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compare' => [[['_route' => 'app_compare', '_controller' => 'App\\Controller\\CompareController::index'], null, null, null, false, false, null]],
        '/deparement' => [[['_route' => 'app_deparement_index', '_controller' => 'App\\Controller\\DeparementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/deparement/new' => [[['_route' => 'app_deparement_new', '_controller' => 'App\\Controller\\DeparementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
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
                .'|/deparement/([^/]++)(?'
                    .'|(*:83)'
                    .'|/edit(*:95)'
                    .'|(*:102)'
                .')'
                .'|/incident/([^/]++)(?'
                    .'|(*:132)'
                    .'|/edit(*:145)'
                    .'|(*:153)'
                .')'
                .'|/oracle/tester/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/task/([^/]++)(?'
                    .'|(*:235)'
                    .'|/edit(*:248)'
                    .'|(*:256)'
                .')'
                .'|/u(?'
                    .'|pload/([^/]++)(?'
                        .'|(*:287)'
                        .'|/edit(*:300)'
                        .'|(*:308)'
                    .')'
                    .'|ser/([^/]++)(?'
                        .'|(*:332)'
                        .'|/edit(*:345)'
                        .'|(*:353)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:394)'
                    .'|wdt/([^/]++)(*:414)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:460)'
                            .'|router(*:474)'
                            .'|exception(?'
                                .'|(*:494)'
                                .'|\\.css(*:507)'
                            .')'
                        .')'
                        .'|(*:517)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_attached_file_show', '_controller' => 'App\\Controller\\AttachedFileController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_attached_file_edit', '_controller' => 'App\\Controller\\AttachedFileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_attached_file_delete', '_controller' => 'App\\Controller\\AttachedFileController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_deparement_show', '_controller' => 'App\\Controller\\DeparementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_deparement_edit', '_controller' => 'App\\Controller\\DeparementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        102 => [[['_route' => 'app_deparement_delete', '_controller' => 'App\\Controller\\DeparementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_incident_show', '_controller' => 'App\\Controller\\IncidentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_incident_edit', '_controller' => 'App\\Controller\\IncidentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'app_incident_delete', '_controller' => 'App\\Controller\\IncidentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_oracle_tester_show', '_controller' => 'App\\Controller\\OracleTesterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_oracle_tester_edit', '_controller' => 'App\\Controller\\OracleTesterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_oracle_tester_delete', '_controller' => 'App\\Controller\\OracleTesterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'app_task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_upload_show', '_controller' => 'App\\Controller\\UploadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'app_upload_edit', '_controller' => 'App\\Controller\\UploadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'app_upload_delete', '_controller' => 'App\\Controller\\UploadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        332 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        414 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        460 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        474 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        494 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        507 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        517 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
