<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Finanza
 *
 * @property $id
 * @property $year
 * @property $month
 * @property $cutDate
 * @property $BalanceInicial
 * @property $totalIngresos
 * @property $totalEgresos
 * @property $BalanceCorte
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Finanza extends Model
{
    
    static $rules = [
		'year' => 'required',
		'month' => 'required',
		'cutDate' => 'required',
		'BalanceInicial' => 'required',
		'BalanceCorte' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['year','month','cutDate','BalanceInicial','BalanceCorte'];



}
