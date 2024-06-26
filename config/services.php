<?php

return [
    'rapidApiKey' => [
        'api_key' => env('RAPIDAPI_KEY'),
    ],

    'bookFinder' => [
        'base_uri' => env('BOOKFINDER_SERVICE_BASE_URL')
    ],

    'allBooksApi' => [
        'base_uri' => env('ALLBOOKSAPI_SERVICE_BASE_URL'),
    ],

    'myAnimeList' => [
        'base_uri' => env('MYANIMELIST_SERVICE_BASE_URL'),
    ],
];