<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'description'
    ];

    /**
     * Check if opinion has url
     * @return bool
     */
    public function hasUrl(): bool
    {
        return !is_null($this->url);
    }

}
