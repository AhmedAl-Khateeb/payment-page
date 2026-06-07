<?php

namespace App\Service\Front;

use App\Models\AboutUs;

class HomeService
{
    public function index()
    {
        return AboutUs::orderBy('created_at', 'asc')->get();
    }
}
