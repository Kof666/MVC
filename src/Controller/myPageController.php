<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Routes to control the report web-site
 */
class myPageController extends AbstractController
{
    #[Route('/me', name: 'me')]
    public function me(): Response
    {
        $data = [];

        return $this->render('/me.html.twig', $data);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        $data = [];

        return $this->render('/about.html.twig', $data);
    }

    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        $data = [];

        return $this->render('/report.html.twig', $data);
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $number = random_int(1, 6);
        $tag = null;
        if($number == 6) {
            $tag = 'winner';
        } else {
            $tag = 'loser';
        }
        $data = [
            'number' => $number,
            'tag' => $tag
        ];

        return $this->render('/lucky.html.twig', $data);
    }

    #[Route('/')]
    public function start(): Response
    {
        $data = [];

        return $this->render('/me.html.twig', $data);
    }

    #[Route('/api', name: 'api')]
    public function api(): Response
    {
        
        $data = [];

        return $this->render('/api.html.twig', $data);
    }

}

