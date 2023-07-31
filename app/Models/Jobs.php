<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Jobs as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class Jobs extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Searchable;

    protected $fillable = [
        'jobs_title',
        'min_salary',
        'max_salary',
        'experince',
        'qualification',
        'description',
    ];
}
