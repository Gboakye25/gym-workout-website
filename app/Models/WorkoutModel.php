<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkoutModel extends Model
{
    protected $table = 'workouts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'description'];
}