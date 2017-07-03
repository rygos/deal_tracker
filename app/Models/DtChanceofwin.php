<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtChanceofwin
 *
 * @property int $id
 * @property string|null $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtChanceofwin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtChanceofwin whereValue($value)
 * @mixin \Eloquent
 */
class DtChanceofwin extends Model
{
    protected $table = 'dt_chanceofwin';

    public $timestamps = false;

    protected $fillable = [
        'value'
    ];

    protected $guarded = [];

        
}