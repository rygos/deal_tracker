<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtProduct
 *
 * @property int $id
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtProduct whereValue($value)
 * @mixin \Eloquent
 */
class DtProduct extends Model
{
    protected $table = 'dt_product';

    public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}