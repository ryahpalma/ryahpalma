<?php

namespace App\Http\Controllers;

use ProtoneMedia\Splade\Facades\SEO;

class MainController extends Controller
{
    public function welcome()
    {
        SEO::title('Ryan Palma')
            ->description('I am a Flexible Web Developer that built cost-effective, robusts and scalable products for companies, all of them were created following meticulous patterns and techniques, ensuring quality and high performance.')
            ->keywords('developer, ryahpalma, backend')
            ->canonical('https://ryahpalma.dev/');

        return view('welcome');
    }
}
