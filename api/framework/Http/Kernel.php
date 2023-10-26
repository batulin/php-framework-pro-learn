<?php

namespace GaryClarke\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        $content = "<h1>hello world</h1>";
        return new Response($content);
    }

}