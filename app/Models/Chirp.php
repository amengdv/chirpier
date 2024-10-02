<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chirp query()
 * @mixin \Eloquent
 */
class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
