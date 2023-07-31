<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table ='companies';
    protected $fillable = [
        'Company_category',
        'logo',
        'title',
        'decription',
        'website',
    ];

    public function joblists()
    {
        return $this->hasMany(Joblist::class,'company_id','id');
    }
    public function jobposts()
    {
        return $this->hasMany(JobPost::class,'company_id','id');
    }
}

