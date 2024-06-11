<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'card_21' => [[], ['_controller' => 'App\\Controller\\Card21Controller::home21'], [], [['text', '/game']], [], [], []],
    'start_21_get' => [[], ['_controller' => 'App\\Controller\\Card21Controller::playerHand21Get'], [], [['text', '/game/21/player']], [], [], []],
    'start_21_surface' => [[], ['_controller' => 'App\\Controller\\Card21Controller::surface'], [], [['text', '/game/21/start']], [], [], []],
    'start_21_post' => [[], ['_controller' => 'App\\Controller\\Card21Controller::playerHand21Post'], [], [['text', '/game/21/player']], [], [], []],
    'bankHand_21' => [[], ['_controller' => 'App\\Controller\\Card21Controller::bankHand21Post'], [], [['text', '/game/21/bank']], [], [], []],
    'new_round_21' => [[], ['_controller' => 'App\\Controller\\Card21Controller::newRound21'], [], [['text', '/game/21/new_round']], [], [], []],
    'doc' => [[], ['_controller' => 'App\\Controller\\Card21Controller::doc21'], [], [['text', '/game/doc']], [], [], []],
    'card_start' => [[], ['_controller' => 'App\\Controller\\CardGameController::home'], [], [['text', '/card']], [], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\CardGameController::test'], [], [['text', '/card/test']], [], [], []],
    'session' => [[], ['_controller' => 'App\\Controller\\CardGameController::play'], [], [['text', '/session']], [], [], []],
    'session_destroyed' => [[], ['_controller' => 'App\\Controller\\CardGameController::sessionDestroy'], [], [['text', '/session/delete']], [], [], []],
    'card_deck' => [[], ['_controller' => 'App\\Controller\\CardGameController::deck'], [], [['text', '/card/deck']], [], [], []],
    'shuffle' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffle'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'draw_get' => [[], ['_controller' => 'App\\Controller\\CardGameController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_post' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCallback'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw_cards' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCards'], [], [['text', '/card/deck/draw_cards']], [], [], []],
    'draw_shuffle' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffleCallback'], [], [['text', '/card/deck/draw_shuffle']], [], [], []],
    'api_deck' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDeck'], [], [['text', '/api/deck']], [], [], []],
    'api_shuffle' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiShuffle'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'api_deck_draw_get' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawGet'], [], [['text', '/api/deck/draw']], [], [], []],
    'api_deck_draw_post' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDraw'], [], [['text', '/api/deck/draw']], [], [], []],
    'api_deck_draw_num' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawCards'], [], [['text', '/api/deck/draw_cards']], [], [], []],
    'pig_start' => [[], ['_controller' => 'App\\Controller\\DiceGameController::home'], [], [['text', '/game/pig']], [], [], []],
    'test_roll_dice' => [[], ['_controller' => 'App\\Controller\\DiceGameController::testRollDice'], [], [['text', '/game/pig/test/roll']], [], [], []],
    'test_roll_num_dice' => [['num'], ['_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/game/pig/test/roll']], [], [], []],
    'pig_init_get' => [[], ['_controller' => 'App\\Controller\\DiceGameController::init'], [], [['text', '/game/pig/init']], [], [], []],
    'pig_init.post' => [[], ['_controller' => 'App\\Controller\\DiceGameController::initCallback'], [], [['text', '/game/pig/init']], [], [], []],
    'pig_play' => [[], ['_controller' => 'App\\Controller\\DiceGameController::play'], [], [['text', '/game/pig/play']], [], [], []],
    'pig_roll' => [[], ['_controller' => 'App\\Controller\\DiceGameController::roll'], [], [['text', '/game/pig/roll']], [], [], []],
    'pig_save' => [[], ['_controller' => 'App\\Controller\\DiceGameController::save'], [], [['text', '/game/pig/save']], [], [], []],
    'api_game' => [[], ['_controller' => 'App\\Controller\\Game21ControllerJson::apiGame'], [], [['text', '/api/game']], [], [], []],
    'library_index' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library']], [], [], []],
    'library_reset' => [[], ['_controller' => 'App\\Controller\\LibraryController::reset'], [], [['text', '/library/reset']], [], [], []],
    'library_create_get' => [[], ['_controller' => 'App\\Controller\\LibraryController::create'], [], [['text', '/library/create']], [], [], []],
    'library_create_post' => [[], ['_controller' => 'App\\Controller\\LibraryController::createLibrary'], [], [['text', '/library/create']], [], [], []],
    'library_view_all' => [[], ['_controller' => 'App\\Controller\\LibraryController::viewAllLibrary'], [], [['text', '/library/view']], [], [], []],
    'library_by_id' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::viewLibraryById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/view']], [], [], []],
    'library_delete_by_id' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::deleteLibraryById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/delete']], [], [], []],
    'library_update_get' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::updateLibraryGet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/update']], [], [], []],
    'library_update_post' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::updateLibraryPost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/update']], [], [], []],
    'api_library_books' => [[], ['_controller' => 'App\\Controller\\LibraryControllerJson::showAllBooks'], [], [['text', '/api/library/books']], [], [], []],
    'api_library_book' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryControllerJson::findByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'me' => [[], ['_controller' => 'App\\Controller\\MyPageController::meRoute'], [], [['text', '/me']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\MyPageController::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\MyPageController::report'], [], [['text', '/report']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\MyPageController::lucky'], [], [['text', '/lucky']], [], [], []],
    'app_mypage_start' => [[], ['_controller' => 'App\\Controller\\MyPageController::start'], [], [['text', '/']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\MyPageController::api'], [], [['text', '/api']], [], [], []],
    'metrics' => [[], ['_controller' => 'App\\Controller\\MyPageController::metrics'], [], [['text', '/metrics']], [], [], []],
    'api/quote' => [[], ['_controller' => 'App\\Controller\\MyPageControllerJson::quote'], [], [['text', '/api/quote']], [], [], []],
    'App\Controller\Card21Controller::home21' => [[], ['_controller' => 'App\\Controller\\Card21Controller::home21'], [], [['text', '/game']], [], [], []],
    'App\Controller\Card21Controller::playerHand21Get' => [[], ['_controller' => 'App\\Controller\\Card21Controller::playerHand21Get'], [], [['text', '/game/21/player']], [], [], []],
    'App\Controller\Card21Controller::surface' => [[], ['_controller' => 'App\\Controller\\Card21Controller::surface'], [], [['text', '/game/21/start']], [], [], []],
    'App\Controller\Card21Controller::playerHand21Post' => [[], ['_controller' => 'App\\Controller\\Card21Controller::playerHand21Post'], [], [['text', '/game/21/player']], [], [], []],
    'App\Controller\Card21Controller::bankHand21Post' => [[], ['_controller' => 'App\\Controller\\Card21Controller::bankHand21Post'], [], [['text', '/game/21/bank']], [], [], []],
    'App\Controller\Card21Controller::newRound21' => [[], ['_controller' => 'App\\Controller\\Card21Controller::newRound21'], [], [['text', '/game/21/new_round']], [], [], []],
    'App\Controller\Card21Controller::doc21' => [[], ['_controller' => 'App\\Controller\\Card21Controller::doc21'], [], [['text', '/game/doc']], [], [], []],
    'App\Controller\CardGameController::home' => [[], ['_controller' => 'App\\Controller\\CardGameController::home'], [], [['text', '/card']], [], [], []],
    'App\Controller\CardGameController::test' => [[], ['_controller' => 'App\\Controller\\CardGameController::test'], [], [['text', '/card/test']], [], [], []],
    'App\Controller\CardGameController::play' => [[], ['_controller' => 'App\\Controller\\CardGameController::play'], [], [['text', '/session']], [], [], []],
    'App\Controller\CardGameController::sessionDestroy' => [[], ['_controller' => 'App\\Controller\\CardGameController::sessionDestroy'], [], [['text', '/session/delete']], [], [], []],
    'App\Controller\CardGameController::deck' => [[], ['_controller' => 'App\\Controller\\CardGameController::deck'], [], [['text', '/card/deck']], [], [], []],
    'App\Controller\CardGameController::shuffle' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffle'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'App\Controller\CardGameController::draw' => [[], ['_controller' => 'App\\Controller\\CardGameController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'App\Controller\CardGameController::drawCallback' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCallback'], [], [['text', '/card/deck/draw']], [], [], []],
    'App\Controller\CardGameController::drawCards' => [[], ['_controller' => 'App\\Controller\\CardGameController::drawCards'], [], [['text', '/card/deck/draw_cards']], [], [], []],
    'App\Controller\CardGameController::shuffleCallback' => [[], ['_controller' => 'App\\Controller\\CardGameController::shuffleCallback'], [], [['text', '/card/deck/draw_shuffle']], [], [], []],
    'App\Controller\CardGameControllerJson::apiDeck' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDeck'], [], [['text', '/api/deck']], [], [], []],
    'App\Controller\CardGameControllerJson::apiShuffle' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiShuffle'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'App\Controller\CardGameControllerJson::apiDrawGet' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawGet'], [], [['text', '/api/deck/draw']], [], [], []],
    'App\Controller\CardGameControllerJson::apiDraw' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDraw'], [], [['text', '/api/deck/draw']], [], [], []],
    'App\Controller\CardGameControllerJson::apiDrawCards' => [[], ['_controller' => 'App\\Controller\\CardGameControllerJson::apiDrawCards'], [], [['text', '/api/deck/draw_cards']], [], [], []],
    'App\Controller\DiceGameController::home' => [[], ['_controller' => 'App\\Controller\\DiceGameController::home'], [], [['text', '/game/pig']], [], [], []],
    'App\Controller\DiceGameController::testRollDice' => [[], ['_controller' => 'App\\Controller\\DiceGameController::testRollDice'], [], [['text', '/game/pig/test/roll']], [], [], []],
    'App\Controller\DiceGameController::testRollDices' => [['num'], ['_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/game/pig/test/roll']], [], [], []],
    'App\Controller\DiceGameController::init' => [[], ['_controller' => 'App\\Controller\\DiceGameController::init'], [], [['text', '/game/pig/init']], [], [], []],
    'App\Controller\DiceGameController::initCallback' => [[], ['_controller' => 'App\\Controller\\DiceGameController::initCallback'], [], [['text', '/game/pig/init']], [], [], []],
    'App\Controller\DiceGameController::play' => [[], ['_controller' => 'App\\Controller\\DiceGameController::play'], [], [['text', '/game/pig/play']], [], [], []],
    'App\Controller\DiceGameController::roll' => [[], ['_controller' => 'App\\Controller\\DiceGameController::roll'], [], [['text', '/game/pig/roll']], [], [], []],
    'App\Controller\DiceGameController::save' => [[], ['_controller' => 'App\\Controller\\DiceGameController::save'], [], [['text', '/game/pig/save']], [], [], []],
    'App\Controller\Game21ControllerJson::apiGame' => [[], ['_controller' => 'App\\Controller\\Game21ControllerJson::apiGame'], [], [['text', '/api/game']], [], [], []],
    'App\Controller\LibraryController::index' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library']], [], [], []],
    'App\Controller\LibraryController::reset' => [[], ['_controller' => 'App\\Controller\\LibraryController::reset'], [], [['text', '/library/reset']], [], [], []],
    'App\Controller\LibraryController::create' => [[], ['_controller' => 'App\\Controller\\LibraryController::create'], [], [['text', '/library/create']], [], [], []],
    'App\Controller\LibraryController::createLibrary' => [[], ['_controller' => 'App\\Controller\\LibraryController::createLibrary'], [], [['text', '/library/create']], [], [], []],
    'App\Controller\LibraryController::viewAllLibrary' => [[], ['_controller' => 'App\\Controller\\LibraryController::viewAllLibrary'], [], [['text', '/library/view']], [], [], []],
    'App\Controller\LibraryController::viewLibraryById' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::viewLibraryById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/view']], [], [], []],
    'App\Controller\LibraryController::deleteLibraryById' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::deleteLibraryById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/delete']], [], [], []],
    'App\Controller\LibraryController::updateLibraryGet' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::updateLibraryGet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/update']], [], [], []],
    'App\Controller\LibraryController::updateLibraryPost' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::updateLibraryPost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/library/update']], [], [], []],
    'App\Controller\LibraryControllerJson::showAllBooks' => [[], ['_controller' => 'App\\Controller\\LibraryControllerJson::showAllBooks'], [], [['text', '/api/library/books']], [], [], []],
    'App\Controller\LibraryControllerJson::findByIsbn' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryControllerJson::findByIsbn'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'App\Controller\MyPageController::meRoute' => [[], ['_controller' => 'App\\Controller\\MyPageController::meRoute'], [], [['text', '/me']], [], [], []],
    'App\Controller\MyPageController::about' => [[], ['_controller' => 'App\\Controller\\MyPageController::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\MyPageController::report' => [[], ['_controller' => 'App\\Controller\\MyPageController::report'], [], [['text', '/report']], [], [], []],
    'App\Controller\MyPageController::lucky' => [[], ['_controller' => 'App\\Controller\\MyPageController::lucky'], [], [['text', '/lucky']], [], [], []],
    'App\Controller\MyPageController::start' => [[], ['_controller' => 'App\\Controller\\MyPageController::start'], [], [['text', '/']], [], [], []],
    'App\Controller\MyPageController::api' => [[], ['_controller' => 'App\\Controller\\MyPageController::api'], [], [['text', '/api']], [], [], []],
    'App\Controller\MyPageController::metrics' => [[], ['_controller' => 'App\\Controller\\MyPageController::metrics'], [], [['text', '/metrics']], [], [], []],
    'App\Controller\MyPageControllerJson::quote' => [[], ['_controller' => 'App\\Controller\\MyPageControllerJson::quote'], [], [['text', '/api/quote']], [], [], []],
];