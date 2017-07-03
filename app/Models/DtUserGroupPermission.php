<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtUserGroupPermission
 *
 * @property int|null $group_id
 * @property string|null $perm
 * @property string|null $desc
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUserGroupPermission whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUserGroupPermission whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUserGroupPermission wherePerm($value)
 * @mixin \Eloquent
 */
class DtUserGroupPermission extends Model
{
    protected $table = 'dt_user_group_permissions';

    public $timestamps = false;

    protected $fillable = [
        'group_id',
        'perm',
        'desc'
    ];

    protected $guarded = [];

        
}