<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtUserGroup
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $desc
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUserGroup whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUserGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUserGroup whereTitle($value)
 * @mixin \Eloquent
 */
class DtUserGroup extends Model
{
    protected $table = 'dt_user_groups';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'desc'
    ];

    protected $guarded = [];

        
}