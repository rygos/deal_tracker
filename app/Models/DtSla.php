<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtSla
 *
 * @property int $id
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtSla whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtSla whereValue($value)
 * @mixin \Eloquent
 */
class DtSla extends Model
{
    protected $table = 'dt_sla';

    public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}