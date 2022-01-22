<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'state',
        'first_name',
        'last_name',
        'business_name',
        'agent_id',
        'odd1',
        'odd2',
        'odd3',
        'odd4',
        'odd5',
        'odd6',
    ];

    public function merchantOdd1()
    {
        return $this->belongsTo(Odd::class,'odd1','id');
    }
    public function merchantOdd2()
    {
        return $this->belongsTo(Odd::class,'odd2','id');
    }
    public function merchantOdd3()
    {
        return $this->belongsTo(Odd::class,'odd3','id');
    }
    public function merchantOdd4()
    {
        return $this->belongsTo(Odd::class,'odd4','id');
    }
    public function merchantOdd5()
    {
        return $this->belongsTo(Odd::class,'odd5','id');
    }
    public function merchantOdd6()
    {
        return $this->belongsTo(Odd::class,'odd6','id');
    }
}
