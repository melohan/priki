<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationStateTransition extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the publication state that owns publication state transition.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publicationState()
    {
        return $this->belongsTo(PublicationState::class);
    }

}
