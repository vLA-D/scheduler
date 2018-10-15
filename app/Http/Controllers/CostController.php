<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCost;
use App\Models\Cost;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $costs = Cost::where('user_id', Auth::user()->id)->paginate(10);

        return view('cost.index', ['costs' => $costs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = Seller::all();

        return view('cost.create', ['sellers' => $sellers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCost $request)
    {
        Cost::create([
            'seller_id'   => $request->seller,
            'title'       => $request->title,
            'amount'      => $request->amount,
            'description' => $request->description,
            'user_id'     => auth()->user()->id,
        ]);

        return redirect()->route('costs.index');
    }

    /**
     * Display the specified resource.
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
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Cost $cost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cost $cost)
    {
        return redirect('home');
    }

    /**
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
