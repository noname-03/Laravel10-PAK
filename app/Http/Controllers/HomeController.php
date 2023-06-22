<?php

namespace App\Http\Controllers;

use App\Models\Pak;
use Illuminate\Http\Request;
use Auth;

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
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('penilai')) {
            $revision = Pak::where('status', 'revisi')->count();
            $waiting = Pak::where('status', 'menunggu')->count();
            $success = Pak::where('status', 'sukses')->count();
            $invalid = Pak::where('status', 'gagal')->count();
            $data = Pak::where('status', 'menunggu')->get();
        } else if (Auth::user()->hasRole('user')) {
            $revision = Pak::where('user_id', Auth::user()->id)->where('status', 'revisi')->count();
            $waiting = Pak::where('user_id', Auth::user()->id)->where('status', 'menunggu')->count();
            $success = Pak::where('user_id', Auth::user()->id)->where('status', 'sukses')->count();
            $invalid = Pak::where('user_id', Auth::user()->id)->where('status', 'gagal')->count();
            $data = Pak::where('user_id', Auth::user()->id)->where('status', 'menunggu')->get();
        }
        return view('home', compact('revision', 'waiting', 'success', 'invalid', 'data'));
    }
    public function getPakStatus($status)
    {
        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('penilai')) {
            $revision = Pak::where('status', 'revisi')->count();
            $waiting = Pak::where('status', 'menunggu')->count();
            $success = Pak::where('status', 'sukses')->count();
            $invalid = Pak::where('status', 'gagal')->count();
            $data = Pak::where('status', $status)->get();
        } else if (Auth::user()->hasRole('user')) {
            $revision = Pak::where('user_id', Auth::user()->id)->where('status', 'revisi')->count();
            $waiting = Pak::where('user_id', Auth::user()->id)->where('status', 'menunggu')->count();
            $success = Pak::where('user_id', Auth::user()->id)->where('status', 'sukses')->count();
            $invalid = Pak::where('user_id', Auth::user()->id)->where('status', 'gagal')->count();
            $data = Pak::where('user_id', Auth::user()->id)->where('status', $status)->get();
        }
        return view('home', compact('revision', 'waiting', 'success', 'invalid', 'data'));
    }
}