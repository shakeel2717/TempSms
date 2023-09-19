<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numbers = Number::where('status', true)->paginate(10);
        return view('number.index', compact('numbers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    public function show($number)
    {
        $number = Number::where('number', $number)->where('status', true)->firstOrFail();

        if (cache()->get('number' . $number)) {

            // checking if timer page is passed
            if (cache()->get('timer' . $number)) {
                return view('number.show', compact('number'));
            } else {

                cache()->remember('timer' . $number, 60 * 5, function () use ($number) {
                    return true;
                });

                return view('number.timer', compact('number'));
            }
        } else {

            cache()->remember('number' . $number, 60 * 5, function () use ($number) {
                return true;
            });

            return view('number.ads', compact('number'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Number $number)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Number $number)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Number $number)
    {
        //
    }
}
