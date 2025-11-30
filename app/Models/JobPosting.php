<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'alumni_id',
        'title',
        'company',
        'location',
        'contract_type',
        'description',
        'requirements',
        'salary_range',
        'application_deadline',
        'contact_email',
        'contact_phone',
        'status',
        'views_count',
    ];

    // TODO: Implémenter les relations
    public function alumni()
    {
        // return $this->belongsTo(NewUser::class, 'alumni_id');
    }

    // TODO: Implémenter les scopes
    public function scopeActive($query)
    {
        // return $query->where('status', 'active');
    }

    // TODO: Implémenter les accesseurs
    public function getStatusLabelAttribute()
    {
        // return match($this->status) {
        //     'active' => 'Active',
        //     'closed' => 'Fermée',
        //     'draft' => 'Brouillon',
        //     default => 'Inconnu',
        // };
    }
}
