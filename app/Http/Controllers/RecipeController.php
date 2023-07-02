<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RecipeController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://www.themealdb.com/api/json/v1/1/search.php?s=Arrabiata');
        $data = json_decode($response->getBody(), true);
        $recipes = $data['meals'];

        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $client = new Client();
        $response = $client->get('https://www.themealdb.com/api/json/v1/1/lookup.php?i=' . $id);

        $data = json_decode($response->getBody(), true);

        $recipe = $data['meals'][0];

        return view('recipes.show', ['recipe' => $recipe]);
    }
}
