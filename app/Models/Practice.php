<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Practice extends Model
{
    use HasFactory;

    /**
     * Get the domain that owns practice.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Get the publication state that owns practice.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publicationState()
    {
        return $this->belongsTo(PublicationState::class);
    }

    /**
     * Get the opinions for the practice.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    /**
     * Returns the opinion of the given user about this practice
     * @param User $user
     * @return Opinion
     */
    public function opinionOf(User $user): ?Opinion
    {
        return $this->opinions()->where('user_id', $user->id)->first('description');
    }

    /**
     * Get the user that owns practice.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get details by practice id.
     * @param int $id
     * @param bool $isPublished return all if isPublished equals to false.
     * @return mixed
     */
    public static function getDetails(int $id, bool $publishedOnly = true)
    {
        return $publishedOnly ? self::selectPublished()->where('practices.id', '=', $id)->first() : self::find($id);
    }

    /**
     * Return published practice.
     * @return mixed
     */
    public static function getPublished()
    {
        return self::selectPublished()->get();
    }

    /**
     * Return published practice by domain id
     * @param int $domainId
     * @return mixed
     */
    public static function getPublishedPerDomain(int $domainId)
    {
        return self::selectPublished()->where('domain_id', '=', $domainId)->get();
    }

    /**
     * Count number of published practices.
     * @return mixed
     */
    public static function countPublished()
    {
        return self::selectPublished()->count();
    }

    /**
     * Practices selection with published slug.
     * @return mixed
     */
    private static function selectPublished()
    {
        return self::whereHas('publicationState', function ($q) {
            $q->where('slug', 'PUB');
        });
    }

    /**
     * Return the last published practices that were modified n days ago
     * @param int $n number of days
     * @return mixed
     */
    public static function getLastUpdated(int $n = 5)
    {
        return self::selectPublished()->where('updated_at', '>=', Carbon::now()->modify('-' . $n . ' days'))->get();
    }

    /**
     * Return sorted publication by publication state slug
     * @return mixed
     */
    public static function allSortedBySlug()
    {
        return self::whereHas('publicationState', function ($q) {
            $q->orderBy('slug');
        })->get();
    }

    /**
     * Is current publication state proposed
     * @return bool
     */
    public function isProposed(): bool
    {
        return $this->publicationState->slug === 'PRO';
    }

    /**
     * Put the practice in published state
     */
    public function publish(): void
    {
        $this->publicationState()->associate(PublicationState::where('slug', 'PUB')->first());
        $this->save();
    }

    /**
     * Return true if user is the author
     * @param User $user
     * @return bool
     */
    public function isAuthor(User $user): bool
    {
        return $this->user->id == $user->id;
    }


}
