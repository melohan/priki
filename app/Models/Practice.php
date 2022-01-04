<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
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


    public static function getDetails(int $id)
    {
        return DB::table('practices')
            ->select(['practices.description', 'practices.created_at', 'practices.updated_at', 'users.fullname as user', 'domains.name as domain'])
            ->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->join('domains', 'practices.domain_id', '=', 'domains.id')
            ->join('users', 'users.id', '=', 'practices.user_id')
            ->where('publication_states.slug', '=', 'PUB')
            ->where('practices.id', '=', $id)
            ->first();
    }

    public static function getPublished()
    {
        return DB::table('practices')
            ->select(['practices.description', 'practices.created_at', 'practices.updated_at', 'practices.id as praticeId', 'domains.name as domain'])
            ->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->join('domains', 'practices.domain_id', '=', 'domains.id')
            ->where('publication_states.slug', '=', 'PUB')
            ->get();
    }

    public static function getPublishedPerDomain(int $domainId)
    {
        return DB::table('practices')
            ->select(['practices.description', 'practices.created_at', 'practices.updated_at', 'practices.id as praticeId', 'domains.name as domain'])
            ->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->join('domains', 'practices.domain_id', '=', 'domains.id')
            ->where('publication_states.slug', '=', 'PUB')
            ->where('domains.id', '=', $domainId)
            ->get();
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

}
