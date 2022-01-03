<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationState extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the publication state transitions for the publication state.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publicationStateTransitions()
    {
        return $this->hasMany(PublicationStateTransition::class);
    }
}
