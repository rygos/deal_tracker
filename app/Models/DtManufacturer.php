<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtManufacturer
 *
 * @property int $id
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtManufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtManufacturer whereValue($value)
 * @mixin \Eloquent
 */
class DtManufacturer extends Model
{
    protected $table = 'dt_manufacturer';

    public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}