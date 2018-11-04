<?php

namespace App\Services;

use App\Models\Cost;

/**
 * Class CostService
 * @package App\Services
 */
class CostService
{
    /**
     * @param $request
     * @return mixed
     */
    public static function create($request)
    {
        return Cost::create([
            'seller_id'   => $request->seller,
            'title'       => $request->title,
            'amount'      => $request->amount,
            'description' => $request->description,
            'date'        => $request->date,
            'user_id'     => auth()->user()->id
        ]);
    }

    /**
     * @param $request
     * @param $cost
     * @return mixed
     */
    public static function update($request, $cost)
    {
        return $cost->update($request->all());
    }
}
