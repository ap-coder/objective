<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use SoftDeletes;

    public $table = 'applicants';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'job_id',
        'website',
        'created_at',
        'updated_at',
        'deleted_at',
        'cover_letter',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class, 'applicant_id', 'id');

    }

    public function applicantSkills()
    {
        return $this->hasMany(Skill::class, 'applicant_id', 'id');

    }
}
