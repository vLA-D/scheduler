<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile(Request $request)
    {
        $user = $request->user();
        $user->load('costs');

        $this_month = $user->costs
            ->where('date', '>=', Carbon::now()->format('Y-m'))
            ->sum('amount');

        return view('user.profile', compact('user', 'this_month'));
    }
}
