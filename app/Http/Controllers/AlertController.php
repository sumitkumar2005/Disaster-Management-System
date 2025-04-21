<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlertController extends Controller
{
    //


    public function showAlerts(Request $request)
    {
        $apiKey = 'b6fee743adc3c8174bf1e323ed30feec';
        $city = $request->input('city', 'Mumbai'); // Default: Mumbai

        // Fetch current weather info
        $weatherResponse = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        if ($weatherResponse->failed() || !$weatherResponse->json('main')) {
            return back()->with('error', 'Weather data not found for this city.');
        }

        $weather = $weatherResponse->json();

        // Also fetch earthquake data (India only)
        $earthquakeResponse = Http::get("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson");
        $earthquakeData = $earthquakeResponse->json()['features'] ?? [];

        $earthquakesInAsia = collect($earthquakeData)->filter(function ($quake) {
            // Add countries/regions in Asia to filter for earthquakes in Asia
            $asianCountries = ['india', 'china', 'japan', 'indonesia', 'pakistan', 'bangladesh', 'philippines', 'vietnam', 'turkey', 'south korea', 'thailand', 'myanmar', 'iraq', 'afghanistan', 'nepal', 'sri lanka', 'malaysia', 'singapore', 'armenian', 'azerbaijan', 'georgia', 'mongolia', 'bhutan', 'maldives', 'laos', 'kyrgyzstan', 'tajikistan', 'turkmenistan', 'uzbekistan', 'kazakhstan', 'korea', 'taiwan'];

            return collect($asianCountries)->contains(function ($country) use ($quake) {
                return str_contains(strtolower($quake['properties']['place']), $country);
            });
        })->values();

        return view('alerts', [
            'city' => $city,
            'weather' => $weather,
            'earthquakes' => $earthquakesInAsia,
        ]);
    }
}
