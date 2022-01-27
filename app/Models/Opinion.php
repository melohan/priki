<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Opinion extends Model
{
    use HasFactory;


    /**
     * Get all reference linked to this opinion.
     * @return BelongsToMany
     */
    public function references(): BelongsToMany
    {
        return $this->belongsToMany(Reference::class, 'opinion_reference');
    }

    /**
     * Get the user that owns opinion.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get comments about an opinion
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments()
    {
        return $this->belongsToMany(User::class, 'user_opinion')->withPivot('comment', 'points');
    }

    /**
     * Get sum of all upvotes (assumption is made that upvote is one point)
     * @return int
     */
    public function upvotes()
    {
        return $this->comments()->wherePivot('points', '>', 0)->count();
    }

    /**
     * Get sum of all downvotes (assumption is made that downvote is one point)
     * @return int
     */
    public function downvotes()
    {
        return $this->comments()->wherePivot('points', '<', 0)->count();
    }

    /**
     * Count opinion on comments
     * @return int
     */
    public function count()
    {
        return $this->comments()->count();
    }
}
