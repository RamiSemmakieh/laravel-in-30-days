<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'We are looking for a PHP developer to join our team.',
                'salary' => '€10.000'
            ],
            [
                'id' => 2,
                'title' => 'Frontend Developer',
                'description' => 'We are looking for a Frontend developer to join our team.',
                'salary' => '€12.000'
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'description' => 'We are looking for a Backend developer to join our team.',
                'salary' => '€30.000'
            ],
            [
                'id' => 4,
                'title' => 'Fullstack Developer',
                'description' => 'We are looking for a Fullstack developer to join our team.',
                'salary' => '€25.000'
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }   
        return $job;
    }
}
