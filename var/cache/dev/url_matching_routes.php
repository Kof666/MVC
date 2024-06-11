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
        '/game' => [[['_route' => 'card_21', '_controller' => 'App\\Controller\\Card21Controller::home21'], null, null, null, false, false, null]],
        '/game/21/player' => [
            [['_route' => 'start_21_get', '_controller' => 'App\\Controller\\Card21Controller::playerHand21Get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'start_21_post', '_controller' => 'App\\Controller\\Card21Controller::playerHand21Post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/21/start' => [[['_route' => 'start_21_surface', '_controller' => 'App\\Controller\\Card21Controller::surface'], null, null, null, false, false, null]],
        '/game/21/bank' => [[['_route' => 'bankHand_21', '_controller' => 'App\\Controller\\Card21Controller::bankHand21Post'], null, ['POST' => 0], null, false, false, null]],
        '/game/21/new_round' => [[['_route' => 'new_round_21', '_controller' => 'App\\Controller\\Card21Controller::newRound21'], null, ['POST' => 0], null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\Card21Controller::doc21'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_start', '_controller' => 'App\\Controller\\CardGameController::home'], null, null, null, false, false, null]],
        '/card/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\CardGameController::test'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\CardGameController::play'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_destroyed', '_controller' => 'App\\Controller\\CardGameController::sessionDestroy'], null, ['GET' => 0], null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardGameController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [
            [['_route' => 'draw_get', '_controller' => 'App\\Controller\\CardGameController::draw'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'draw_post', '_controller' => 'App\\Controller\\CardGameController::drawCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/deck/draw_cards' => [[['_route' => 'draw_cards', '_controller' => 'App\\Controller\\CardGameController::drawCards'], null, ['POST' => 0], null, false, false, null]],
        '/card/deck/draw_shuffle' => [[['_route' => 'draw_shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffleCallback'], null, ['POST' => 0], null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDeck'], null, null, null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_shuffle', '_controller' => 'App\\Controller\\CardGameControllerJson::apiShuffle'], null, null, null, false, false, null]],
        '/api/deck/draw' => [
            [['_route' => 'api_deck_draw_get', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawGet'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_deck_draw_post', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDraw'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/deck/draw_cards' => [[['_route' => 'api_deck_draw_num', '_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawCards'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'App\\Controller\\DiceGameController::home'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'App\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init.post', '_controller' => 'App\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'App\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'App\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'App\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\Game21ControllerJson::apiGame'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'library_index', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/reset' => [[['_route' => 'library_reset', '_controller' => 'App\\Controller\\LibraryController::reset'], null, null, null, false, false, null]],
        '/library/create' => [
            [['_route' => 'library_create_get', '_controller' => 'App\\Controller\\LibraryController::create'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'library_create_post', '_controller' => 'App\\Controller\\LibraryController::createLibrary'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/view' => [[['_route' => 'library_view_all', '_controller' => 'App\\Controller\\LibraryController::viewAllLibrary'], null, null, null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api_library_books', '_controller' => 'App\\Controller\\LibraryControllerJson::showAllBooks'], null, null, null, false, false, null]],
        '/me' => [[['_route' => 'me', '_controller' => 'App\\Controller\\MyPageController::meRoute'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\MyPageController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\MyPageController::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\MyPageController::lucky'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_mypage_start', '_controller' => 'App\\Controller\\MyPageController::start'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\MyPageController::api'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\MyPageController::metrics'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'api/quote', '_controller' => 'App\\Controller\\MyPageControllerJson::quote'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/game/pig/test/roll/(\\d+)(*:227)'
                .'|/library/(?'
                    .'|view/([^/]++)(*:260)'
                    .'|delete/([^/]++)(*:283)'
                    .'|update/([^/]++)(?'
                        .'|(*:309)'
                    .')'
                .')'
                .'|/api/library/book/([^/]++)(*:345)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'test_roll_num_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        260 => [[['_route' => 'library_by_id', '_controller' => 'App\\Controller\\LibraryController::viewLibraryById'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'library_delete_by_id', '_controller' => 'App\\Controller\\LibraryController::deleteLibraryById'], ['id'], null, null, false, true, null]],
        309 => [
            [['_route' => 'library_update_get', '_controller' => 'App\\Controller\\LibraryController::updateLibraryGet'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'library_update_post', '_controller' => 'App\\Controller\\LibraryController::updateLibraryPost'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        345 => [
            [['_route' => 'api_library_book', '_controller' => 'App\\Controller\\LibraryControllerJson::findByIsbn'], ['isbn'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
