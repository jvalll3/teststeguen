<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route(path="/home", name="home")
     * @return Response
     */
    public function home()
    {
        return new Response("Hello!");
    }
}