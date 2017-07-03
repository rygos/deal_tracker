<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtDealtype
 *
 * @property int $id
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtDealtype whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtDealtype whereValue($value)
 * @mixin \Eloquent
 */
class DtDealtype extends Model
{
    protected $table = 'dt_dealtype';

    public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}