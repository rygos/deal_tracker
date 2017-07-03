<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DtMaster
 *
 * @property int $id
 * @property string|null $create_date
 * @property string|null $crm_wft
 * @property string|null $customer
 * @property string|null $short_desc
 * @property int|null $imac
 * @property int|null $onsitecc
 * @property int|null $swap
 * @property int|null $resold_sub
 * @property int|null $callrouting
 * @property int|null $product
 * @property int|null $manufaturer
 * @property int|null $volume
 * @property int|null $sla
 * @property int|null $type
 * @property string|null $go_nogo
 * @property string|null $business_contact
 * @property int|null $costdeskowner
 * @property string|null $todo_remarks
 * @property string|null $due_date
 * @property int|null $revenue
 * @property string|null $total_peroid
 * @property int|null $deal_type
 * @property int|null $status
 * @property int|null $complete
 * @property int|null $chanceofwin
 * @property string|null $closing_date
 * @property string|null $est_start_date
 * @property string|null $winner
 * @property string|null $competitors
 * @property string|null $winloss_outcome
 * @property int|null $variants
 * @property string|null $update_date
 * @property string|null $columntitle_update_date
 * @property string|null $real_creation_date
 * @property int|null $cost_intern
 * @property int|null $cost_extern
 * @property int|null $cost_software
 * @property string|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereBusinessContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCallrouting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereChanceofwin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereClosingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereColumntitleUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCompetitors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCostExtern($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCostIntern($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCostSoftware($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCostdeskowner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCrmWft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereDealType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereEstStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereGoNogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereImac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereManufaturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereOnsitecc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereRealCreationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereResoldSub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereRevenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereSla($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereSwap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereTodoRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereTotalPeroid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereVariants($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereWinlossOutcome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DtMaster whereWinner($value)
 * @mixin \Eloquent
 */
class DtMaster extends Model
{
    protected $table = 'dt_master';

    public $timestamps = false;

    protected $fillable = [
        'create_date',
        'crm_wft',
        'customer',
        'short_desc',
        'imac',
        'onsitecc',
        'swap',
        'resold_sub',
        'callrouting',
        'product',
        'manufaturer',
        'volume',
        'sla',
        'type',
        'go_nogo',
        'business_contact',
        'costdeskowner',
        'todo_remarks',
        'due_date',
        'revenue',
        'total_peroid',
        'deal_type',
        'status',
        'complete',
        'chanceofwin',
        'closing_date',
        'est_start_date',
        'winner',
        'competitors',
        'winloss_outcome',
        'variants',
        'update_date',
        'columntitle_update_date',
        'real_creation_date',
        'cost_intern',
        'cost_extern',
        'cost_software',
        'country'
    ];

    protected $guarded = [];

        
}