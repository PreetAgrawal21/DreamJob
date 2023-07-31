<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Jobs as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class JobPost extends Model
{
    use HasFactory;

    //use HasApiTokens, HasFactory, Notifiable;
    protected $table= 'jobs';
    protected $fillable =[
        'job_title',
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
