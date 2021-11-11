<?php

namespace App\Http\Controllers;

use App\Models\RequiredProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user->products()->pluck('product_id'));
        return view('home', [
            'required_products' => RequiredProduct::with('product')->get(),
            'products' => $user->products,
            'absen' => RequiredProduct::whereNotIn('product_id', $user->products()->pluck('product_id'))->get(),
        ]);
    }
}
