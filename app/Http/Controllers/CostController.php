<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostCreate;
use App\Http\Requests\CostUpdate;
use App\Models\Cost;
use App\Services\CostService;
use Illuminate\Http\Request;

/**
 * Class CostController
 * @package App\Http\Controllers
 */
class CostController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = auth()->user()->costs()->with('seller')->paginate(10);

        return view('cost.index', ['costs' => $costs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CostCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostCreate $request)
    {
        CostService::create($request);

        return redirect()->route('costs.index');
    }

    /**
     * Display the specified resource. TODO
     *
     * @param  \App\Models\Cost $cost
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cost $cost
     * @return \Illuminate\Http\Response
     */
    public function edit(Cost $cost)
    {
        return view('cost.edit', ['cost' => $cost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CostUpdate $request
     * @param  \App\Models\Cost $cost
     * @return \Illuminate\Http\Response
     */
    public function update(CostUpdate $request, Cost $cost)
    {
        CostService::update($request, $cost);

        return redirect()->route('costs.index');
    }

    /**
     * Delete the specified resource.
     *
     * @param Cost $cost
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Cost $cost)
    {
        $cost->delete();

        return redirect()->back();
    }
}
