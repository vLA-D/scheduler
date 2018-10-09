<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cost
 * @package App\Models
 */
class Cost extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'amount',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
