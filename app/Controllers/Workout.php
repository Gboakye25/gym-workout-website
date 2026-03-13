<?php

namespace App\Controllers;

class Workout extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Workout List'
        ];

        return view('workouts/index', $data);
    }
}