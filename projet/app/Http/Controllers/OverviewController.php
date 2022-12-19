<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OverviewController extends Controller
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
     * @return Renderable
     */
    public function index(){
        $experiences = DB::table('experiences')
            ->orderByDesc('date_debut')
//            ->limit(3)
            ->get();
        $projets = DB::table('projets')
//            ->limit(3)
            ->get();
//        dd($experiencesDataTable);
        return view('dashboard')
            ->with('experiences',$experiences)
            ->with('projets',$projets);
    }
}
