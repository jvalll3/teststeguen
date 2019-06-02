<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /** @Route("/", name="home") */
    public function home()
    {
        return new Response("Hello!");
    }
}