<?php

// namespace App\tests\Controller;

// use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

// /**
//  * Test cases for class Game21Controller.
//  *
//  * @SuppressWarnings(PHPMD)
//  */
// class testDiceGameController extends WebTestCase
// {
//     public function testHome(): void {

//         $client = static::createClient();

//         $crawler = $client->request('GET', '/game/pig');

//         $this->assertResponseIsSuccessful();
//         $this->assertSelectorTextContains('h1', "MVC Rapporter");
//     }

//     public function testTestRollDice(): void {
//         $client = static::createClient();
//         $crawler = $client->request('GET', '/game/pig/test/roll');
//         $this->assertResponseIsSuccessful();
//     }

//     public function testTestRollDices(): void {
//         $client = static::createClient();
//         $crawler = $client->request('GET', '/game/pig/test/roll');
//         $this->assertResponseIsSuccessful();
//     }

//     public function testInitCallback(): void {
//         $client = static::createClient();
//         $crawler = $client->request('GET', '/game/pig/init');
//         $this->assertResponseIsSuccessful();
//     }
// }
