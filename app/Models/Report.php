<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'report_date',
        'type',
        'findings',
        'status'
    ];

    // Relationship: One report belongs to one user
    public function user() {
        return $this->belongsTo(User::class);
    }
}
