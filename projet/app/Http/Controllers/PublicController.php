<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PublicController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('welcome');
    }


    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function portfolio()
    {
        $projets = DB::table('projets')
            ->get();
//        dd($projets);
        return view('portfolio')
            ->with('projets',$projets);
    }


    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function parcours()
    {
        $experiences = DB::table('experiences')->get();
        return view('parcours')
            ->with('experiences',$experiences);
    }


    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contacts');
    }
}
