<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use DB;

class BalanceController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('balance.index', compact('users'));
    }

    public function transferForm()
    {
        $users = User::all();

        return view('balance.transferForm', compact('users'));
    }

    public function makeTransfer(Request $request)
    {
        if ($request->from == $request->to) {
            return back()->with('status', 'Please, select differn users.');
        }

        $amount = floatval($request->amount);
        $amount = round($amount, 2);

        DB::transaction(function () use ($amount, $request) {
            $from = User::find($request->from);
            $to = User::find($request->to);

            $from->balance -= $amount;
            $to->balance += $amount;

            $from->save();
            $to->save();
        });

        return redirect()->action('BalanceController@index');
    }
}
