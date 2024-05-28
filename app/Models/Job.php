<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = ['title', 'description', 'salary'];
}
