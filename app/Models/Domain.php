<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Domain extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * Get the practices for the domain.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function practices()
    {
        return $this->hasMany(Practice::class);
    }

    /**
     * Count published practice.
     * @return int
     */
    public function countPublishedPractice(){
        return $this->practices()->whereHas('publicationState', function ($q) {
            $q->where('slug','PUB');
        })->count();
    }


}
