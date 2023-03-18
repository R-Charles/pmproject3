<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'code', 'status', 'description'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['title'] ?? false) {
            $query->where('title', 'like', '%' . request('title') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('code', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%');
        }
    }
}
