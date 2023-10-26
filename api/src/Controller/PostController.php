<?php

namespace App\Controller;

use GaryClarke\Framework\Http\Response;

class PostController
{
    public function show(int $id)
    {
        $content = "This is post $id";

        return new Response($content);
    }

}