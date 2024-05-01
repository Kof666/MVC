<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyPageControllerJson
{
    // #[Route('/api/', name: 'api')]
    // public function api(): Response
    // {

    //     $data = [];

    //     return $this->render('/api.html.twig', $data);
    // }

    #[Route('/api/quote', name: 'api/quote')]
    public function quote(): Response
    {
        // $quotes = [
        //     "Code is like humor. When you have to explain it, it’s bad. – Cory House",
        //     "Experience is the name everyone gives to their mistakes. – Oscar Wilde",
        //     "Confusion is part of programming. ― Felienne Hermans"
        // ]
        // $timestamp = time();
        date_default_timezone_set('Europe/Amsterdam');
        $date = date('Y-m-d', time());
        $time = date('H:i:s', time());
        $number = random_int(1, 3);

        $quote = null;

        if($number == 1) {
            $quote = "Code is like humor. When you have to explain it, it’s bad. – Cory House";
        } elseif ($number == 2) {
            $quote = "Experience is the name everyone gives to their mistakes. – Oscar Wilde";
        } elseif ($number == 3) {
            $quote = "Confusion is part of programming. ― Felienne Hermans";
        }

        $data = [
            'quote' => $quote,
            'date' => $date,
            'time' => $time
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
