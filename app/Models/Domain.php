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


    public function countPractices()
    {
        $query = "SELECT COUNT(*) as 'count' FROM (
                    SELECT COUNT(practices.id) AS practiceId FROM practices
                        INNER JOIN domains ON domains.id = practices.domain_id
                        INNER JOIN publication_states ON publication_states.id = practices.publication_state_id
                        WHERE publication_states.slug = 'PUB'
                        AND domains.id = :id
                        GROUP BY practices.id
                  ) t";
        return DB::selectOne($query, ['id' => $this->id]);
    }

}
