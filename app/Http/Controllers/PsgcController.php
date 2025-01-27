<?php

namespace App\Http\Controllers;

use App\Services\PsgcService;

class PsgcController extends Controller
{
    protected $psgcService;

    public function __construct(PsgcService $psgcService)
    {
        $this->psgcService = $psgcService;
    }

    public function showProvinces()
    {
        $provinces = $this->psgcService->getProvinces();

        if ($provinces) {
            return view('psgc.provinces', ['provinces' => $provinces]);
        } else {
            return view('psgc.error');
        }
    }
}
