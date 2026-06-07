<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Front\HomeService;

class HomeController extends Controller
{
    public function __construct(private readonly HomeService $homeService)
    {
    }

    public function index()
    {
        $aboutUs = $this->homeService->index();

        return view('front.home', compact('aboutUs'));
    }
}
