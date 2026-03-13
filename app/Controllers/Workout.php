<?php

namespace App\Controllers;

class Workout extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Workout List',
            'workouts' => [
    ['slug' => 'chest-workout', 'name' => 'Chest Workout'],
    ['slug' => 'leg-workout', 'name' => 'Leg Workout'],
    ['slug' => 'back-workout', 'name' => 'Back Workout']
]

        return view('workouts/index', $data);
    }
}