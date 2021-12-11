<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Practice extends Model
{
    use HasFactory;

    public static function getPublished()
    {
        return DB::table('practices')
            ->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->join('domains', 'practices.domain_id', '=', 'domains.id')
            ->where('publication_states.slug', '=', 'PUB')
            ->get();
    }

    public static function getPublishedPerDomain(int $domainId)
    {
        return DB::table('practices')
            ->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->join('domains', 'practices.domain_id', '=', 'domains.id')
            ->where('publication_states.slug', '=', 'PUB')
            ->where('domains.id', '=', $domainId)
            ->get();
    }

    public static function countPublished()
    {
        return DB::table('practices')
            ->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->whereIn('publication_states.slug', ['PUB'])
            ->count();
    }

    public static function getLastUpdated(int $n = 5)
    {
        return DB::table('practices')->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->where('publication_states.slug', '=', 'PUB')
            ->whereDate('updated_at', '>=', Carbon::now()->modify('-' . $n . ' days'))
            ->get();
    }
}
