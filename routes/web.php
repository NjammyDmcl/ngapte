<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/login', 'UserController@index');

Route::get('/classroom', function () {
    $classroom = [
        [
            'name' => '3iL5',
            'member' => '30',
            'document' => '303'
        ],
        [
            'name' => '3iL4',
            'member' => '18',
            'document' => '233'
        ],
        [
            'name' => '3iL3',
            'member' => '30',
            'document' => '416'
        ],
        [
            'name' => 'Prepa 3iL 2',
            'member' => '40',
            'document' => '23'
        ],
        [
            'name' => 'Prepa 3iL 1',
            'member' => '30',
            'document' => '32'
        ],
        [
            'name' => 'CS2i 5',
            'member' => '10',
            'document' => '13'
        ],
        [
            'name' => 'CS2i 4',
            'member' => '36',
            'document' => '17'
        ],
        [
            'name' => 'CS2i 3',
            'member' => '33',
            'document' => '07'
        ]
    ];
    return view('classroom',compact('classroom'));
});
