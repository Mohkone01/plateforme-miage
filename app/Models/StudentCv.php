<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCv extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'file_name',
        'file_path',
        'file_size',
        'mime_type',
        'is_active',
        'views_count',
        'downloads_count',
    ];

    // TODO: Implémenter les relations
    public function student()
    {
        // return $this->belongsTo(NewUser::class, 'student_id');
    }

    // TODO: Implémenter les scopes
    public function scopeActive($query)
    {
        // return $query->where('is_active', true);
    }

    // TODO: Implémenter les méthodes utilitaires
    public function incrementViews()
    {
        // $this->increment('views_count');
    }

    public function incrementDownloads()
    {
        // $this->increment('downloads_count');
    }
}
