<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Practice extends Model
{
    use HasFactory;

    public static function getLastUpdated(int $n = 5)
    {
        return  DB::table('practices')->join('publication_states', 'practices.publication_state_id', '=', 'publication_states.id')
            ->where('publication_states.slug', '=', 'PUB')
            ->whereDate('updated_at', '>=', Carbon::now()->modify('-'.$n.' days'))
            ->get();
    }
}
