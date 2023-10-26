<?php

namespace App\Controller;

use GaryClarke\Framework\Http\Response;

class HomeController
{
    public function index()
    {
        $content = "<h1>home</h1>";

        return new Response($content);
    }

}