<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

classPractice extends Model
{
    use HasFactory;

    public static function getLastUpdated(int $n = 5)
    {
        return self::whereDate('updated_at', '<=', Carbon::now()->subDays($n))->get();
    }
}
