<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtUser
 *
 * @property int $id
 * @property string|null $short_name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $date_last_login
 * @property string|null $date_create
 * @property int|null $group_id
 * @property string|null $email
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereDateCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereDateLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtUser whereShortName($value)
 * @mixin \Eloquent
 */
class DtUser extends Model
{
    protected $table = 'dt_user';

    public $timestamps = false;

    protected $fillable = [
        'short_name',
        'first_name',
        'last_name',
        'date_last_login',
        'date_create',
        'group_id',
        'email'
    ];

    protected $guarded = [];

        
}