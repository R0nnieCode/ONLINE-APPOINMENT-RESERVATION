<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class PsgcService
{
    protected $client;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUrl = env('PSGC_API_URL');  // The API base URL from your .env
    }

    // Method to get all provinces
    public function getProvinces()
    {
        try {
            $response = $this->client->get($this->baseUrl . 'provinces');
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            Log::error("Error fetching provinces: " . $e->getMessage());
            return null;
        }
    }

    // Method to get a specific city/municipality by its PSGC code
    public function getCityByCode($psgcCode)
    {
        try {
            $response = $this->client->get($this->baseUrl . 'cities/' . $psgcCode);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            Log::error("Error fetching city: " . $e->getMessage());
            return null;
        }
    }
}
