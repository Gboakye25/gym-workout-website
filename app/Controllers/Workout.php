<?php

namespace App\Controllers;

use App\Models\WorkoutModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Workout extends BaseController
{
    public function index()
    {
        $model = new WorkoutModel();

        $data = [
            'title' => 'Workout List',
            'workouts' => $model->findAll()
        ];

        return view('workouts/index', $data);
    }

    public function view($slug = null)
    {
        $model = new WorkoutModel();

        $workout = $model->where('slug', $slug)->first();

        if (! $workout) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $workout['name'],
            'workout' => $workout
        ];

        return view('workouts/view', $data);
    }
}