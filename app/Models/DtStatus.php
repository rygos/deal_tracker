<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtStatus
 *
 * @property int $id
 * @property string|null $value
 * @property string|null $bs_color
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtStatus whereBsColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtStatus whereValue($value)
 * @mixin \Eloquent
 */
class DtStatus extends Model
{
    protected $table = 'dt_status';

    public $timestamps = false;

    protected $fillable = [
        'value',
        'bs_color'
    ];

    protected $guarded = [];

        
}