<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtType
 *
 * @property int $id
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtType whereValue($value)
 * @mixin \Eloquent
 */
class DtType extends Model
{
    protected $table = 'dt_type';

    public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}