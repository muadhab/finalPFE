<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_attached_file_index' => [[], ['_controller' => 'App\\Controller\\AttachedFileController::index'], [], [['text', '/attached/file/']], [], [], []],
    'app_attached_file_new' => [[], ['_controller' => 'App\\Controller\\AttachedFileController::new'], [], [['text', '/attached/file/new']], [], [], []],
    'app_attached_file_show' => [['id'], ['_controller' => 'App\\Controller\\AttachedFileController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/attached/file']], [], [], []],
    'app_attached_file_edit' => [['id'], ['_controller' => 'App\\Controller\\AttachedFileController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/attached/file']], [], [], []],
    'app_attached_file_delete' => [['id'], ['_controller' => 'App\\Controller\\AttachedFileController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/attached/file']], [], [], []],
    'app_compare' => [[], ['_controller' => 'App\\Controller\\CompareController::index'], [], [['text', '/compare']], [], [], []],
    'app_comparer_index' => [[], ['_controller' => 'App\\Controller\\ComparerController::index'], [], [['text', '/comparer/']], [], [], []],
    'app_comparer_new' => [[], ['_controller' => 'App\\Controller\\ComparerController::new'], [], [['text', '/comparer/new']], [], [], []],
    'app_comparer_show' => [['id'], ['_controller' => 'App\\Controller\\ComparerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comparer']], [], [], []],
    'app_comparer_edit' => [['id'], ['_controller' => 'App\\Controller\\ComparerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comparer']], [], [], []],
    'app_comparer_delete' => [['id'], ['_controller' => 'App\\Controller\\ComparerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comparer']], [], [], []],
    'app_deparement_index' => [[], ['_controller' => 'App\\Controller\\DeparementController::index'], [], [['text', '/deparement/']], [], [], []],
    'app_deparement_new' => [[], ['_controller' => 'App\\Controller\\DeparementController::new'], [], [['text', '/deparement/new']], [], [], []],
    'app_deparement_show' => [['id'], ['_controller' => 'App\\Controller\\DeparementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deparement']], [], [], []],
    'app_deparement_edit' => [['id'], ['_controller' => 'App\\Controller\\DeparementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/deparement']], [], [], []],
    'app_deparement_delete' => [['id'], ['_controller' => 'App\\Controller\\DeparementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deparement']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_incident_index' => [[], ['_controller' => 'App\\Controller\\IncidentController::index'], [], [['text', '/incident/']], [], [], []],
    'app_incident_new' => [[], ['_controller' => 'App\\Controller\\IncidentController::new'], [], [['text', '/incident/new']], [], [], []],
    'app_incident_show' => [['id'], ['_controller' => 'App\\Controller\\IncidentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/incident']], [], [], []],
    'app_incident_edit' => [['id'], ['_controller' => 'App\\Controller\\IncidentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/incident']], [], [], []],
    'app_incident_delete' => [['id'], ['_controller' => 'App\\Controller\\IncidentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/incident']], [], [], []],
    'app_oracle_tester_index' => [[], ['_controller' => 'App\\Controller\\OracleTesterController::index'], [], [['text', '/oracle/tester/']], [], [], []],
    'app_oracle_tester_new' => [[], ['_controller' => 'App\\Controller\\OracleTesterController::new'], [], [['text', '/oracle/tester/new']], [], [], []],
    'app_oracle_tester_show' => [['id'], ['_controller' => 'App\\Controller\\OracleTesterController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/oracle/tester']], [], [], []],
    'app_oracle_tester_edit' => [['id'], ['_controller' => 'App\\Controller\\OracleTesterController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/oracle/tester']], [], [], []],
    'app_oracle_tester_delete' => [['id'], ['_controller' => 'App\\Controller\\OracleTesterController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/oracle/tester']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_task_index' => [[], ['_controller' => 'App\\Controller\\TaskController::index'], [], [['text', '/task/']], [], [], []],
    'app_task_new' => [[], ['_controller' => 'App\\Controller\\TaskController::new'], [], [['text', '/task/new']], [], [], []],
    'app_task_show' => [['id'], ['_controller' => 'App\\Controller\\TaskController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/task']], [], [], []],
    'app_task_edit' => [['id'], ['_controller' => 'App\\Controller\\TaskController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/task']], [], [], []],
    'app_task_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/task']], [], [], []],
    'app_upload_index' => [[], ['_controller' => 'App\\Controller\\UploadController::index'], [], [['text', '/upload/']], [], [], []],
    'app_upload_new' => [[], ['_controller' => 'App\\Controller\\UploadController::new'], [], [['text', '/upload/new']], [], [], []],
    'app_upload_show' => [['id'], ['_controller' => 'App\\Controller\\UploadController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/upload']], [], [], []],
    'app_upload_edit' => [['id'], ['_controller' => 'App\\Controller\\UploadController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/upload']], [], [], []],
    'app_upload_delete' => [['id'], ['_controller' => 'App\\Controller\\UploadController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/upload']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
];
