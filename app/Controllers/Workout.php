<?php

namespace App\Controllers;

class Workout extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Workout List',
            'workouts' => [
                ['name' => 'Chest Workout'],
                ['name' => 'Leg Workout'],
                ['name' => 'Back Workout']
            ]
        ];

        return view('workouts/index', $data);
    }
}