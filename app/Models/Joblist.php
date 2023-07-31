<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Joblist extends Model
{
    use HasFactory, Searchable;

    protected $table = 'jobs';

    protected $fillable =[
        'company_id',
        'job_title',
        'job_location',
        'min_salary',
        'max_salary',
        'experince',
        'qualification',
        'description',
    ];

    public function company()
	{
        return $this->belongsTo(Company::class);
	}
}
