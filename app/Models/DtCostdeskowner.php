<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtCostdeskowner
 *
 * @property int $id
 * @property string|null $value
 * @property string|null $short_name
 * @property string|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtCostdeskowner whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtCostdeskowner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtCostdeskowner whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtCostdeskowner whereValue($value)
 * @mixin \Eloquent
 */
class DtCostdeskowner extends Model
{
    protected $table = 'dt_costdeskowner';

    public $timestamps = false;

    protected $fillable = [
        'value',
        'short_name',
        'country'
    ];

    protected $guarded = [];

        
}