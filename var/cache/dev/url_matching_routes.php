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
        '/oracle/tester/admin/oracle/tester' => [[['_route' => 'app_admin_oracle_tester', '_controller' => 'App\\Controller\\OracleTesterController::index1'], null, null, null, false, false, null]],
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
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::reindex'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ttached/file/([^/]++)(?'
                        .'|(*:36)'
                        .'|/edit(*:48)'
                        .'|(*:55)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:96)'
                        .'|/(?'
                            .'|doc(?'
                                .'|s(?:\\.([^/]++))?(*:129)'
                                .'|uments(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:164)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:202)'
                                    .')'
                                .')'
                            .')'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:241)'
                        .')'
                    .')'
                .')'
                .'|/comparer/([^/]++)(?'
                    .'|(*:273)'
                    .'|/edit(*:286)'
                    .'|(*:294)'
                .')'
                .'|/deparement/([^/]++)(?'
                    .'|(*:326)'
                    .'|/edit(*:339)'
                    .'|(*:347)'
                .')'
                .'|/incident/([^/]++)(?'
                    .'|(*:377)'
                    .'|/edit(*:390)'
                    .'|(*:398)'
                .')'
                .'|/task/([^/]++)(?'
                    .'|(*:424)'
                    .'|/edit(*:437)'
                    .'|(*:445)'
                .')'
                .'|/u(?'
                    .'|pload/([^/]++)(?'
                        .'|(*:476)'
                        .'|/edit(*:489)'
                        .'|(*:497)'
                    .')'
                    .'|ser/([^/]++)(?'
                        .'|(*:521)'
                        .'|/edit(*:534)'
                        .'|(*:542)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:583)'
                    .'|wdt/([^/]++)(*:603)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:649)'
                            .'|router(*:663)'
                            .'|exception(?'
                                .'|(*:683)'
                                .'|\\.css(*:696)'
                            .')'
                        .')'
                        .'|(*:706)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_attached_file_show', '_controller' => 'App\\Controller\\AttachedFileController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_attached_file_edit', '_controller' => 'App\\Controller\\AttachedFileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_attached_file_delete', '_controller' => 'App\\Controller\\AttachedFileController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        96 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        129 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        164 => [
            [['_route' => 'api_documents_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Resource\\document', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_documents_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Resource\\document', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        202 => [
            [['_route' => 'api_documents_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Resource\\document', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_documents_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Resource\\document', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_documents_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Resource\\document', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_documents_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Resource\\document', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        241 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        273 => [[['_route' => 'app_comparer_show', '_controller' => 'App\\Controller\\ComparerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_comparer_edit', '_controller' => 'App\\Controller\\ComparerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'app_comparer_delete', '_controller' => 'App\\Controller\\ComparerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        326 => [[['_route' => 'app_deparement_show', '_controller' => 'App\\Controller\\DeparementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [[['_route' => 'app_deparement_edit', '_controller' => 'App\\Controller\\DeparementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'app_deparement_delete', '_controller' => 'App\\Controller\\DeparementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_incident_show', '_controller' => 'App\\Controller\\IncidentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'app_incident_edit', '_controller' => 'App\\Controller\\IncidentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'app_incident_delete', '_controller' => 'App\\Controller\\IncidentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        424 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [[['_route' => 'app_task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        476 => [[['_route' => 'app_upload_show', '_controller' => 'App\\Controller\\UploadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        489 => [[['_route' => 'app_upload_edit', '_controller' => 'App\\Controller\\UploadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        497 => [[['_route' => 'app_upload_delete', '_controller' => 'App\\Controller\\UploadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        521 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        583 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        603 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        649 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        663 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        683 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        696 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        706 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
