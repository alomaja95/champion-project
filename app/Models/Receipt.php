<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'year_week_no',
        'state',
        'business_name',
        'merchant_id',
        'cash',
        'teller',
        'total_deposit',
        'odd1',
        'odd2',
        'odd3',
        'odd4',
        'odd5',
        'odd6',
        'g_odd1',
        'g_odd1_1',
        'g_odd1_2',
        'g_odd1_3',
        'g_odd2',
        'g_odd2_1',
        'g_odd2_2',
        'g_odd2_3',
        'g_odd3',
        'g_odd3_1',
        'g_odd3_2',
        'g_odd3_3',
        'g_odd4',
        'g_odd4_1',
        'g_odd4_2',
        'g_odd4_3',
        'g_odd5',
        'g_odd5_1',
        'g_odd5_2',
        'g_odd5_3',
        'g_odd6',
        'g_odd6_1',
        'g_odd6_2',
        'g_odd6_3',
        'total',
        'total_1',
        'total_2',
        'total_3',
        'loan',
        'balance_merchant',
        'balance_company'
    ];

}
