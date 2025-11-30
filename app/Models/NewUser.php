<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NewUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'phone',
        'bio',
        'level',
        'matricule',
        'linkedin_url',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // TODO: Implémenter les méthodes de vérification de rôle
    public function isAlumni()
    {
        // return $this->role === 'alumni';
    }

    public function isStudent()
    {
        // return $this->role === 'student';
    }

    // TODO: Implémenter les relations
    public function jobPostings()
    {
        // return $this->hasMany(JobPosting::class, 'alumni_id');
    }

    public function cvs()
    {
        // return $this->hasMany(StudentCv::class, 'student_id');
    }

    // TODO: Implémenter l'accesseur pour le nom complet
    public function getFullNameAttribute()
    {
        // return "{$this->first_name} {$this->last_name}";
    }
}
