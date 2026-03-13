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
        ];

        return view('workouts/index', $data);
    }

    public function view($slug = null)
    {
        $workouts = [
            'chest-workout' => [
                'name' => 'Chest Workout',
                'description' => 'This workout focuses on building chest strength.'
            ],
            'leg-workout' => [
                'name' => 'Leg Workout',
                'description' => 'This workout focuses on lower body strength.'
            ],
            'back-workout' => [
                'name' => 'Back Workout',
                'description' => 'This workout focuses on back and posture.'
            ]
        ];

        if (! array_key_exists($slug, $workouts)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $workouts[$slug]['name'],
            'workout' => $workouts[$slug]
        ];

        return view('workouts/view', $data);
    }
}