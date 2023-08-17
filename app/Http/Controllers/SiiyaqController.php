<?php

namespace App\Http\Controllers;

use App\Models\Siiyaq;
use Illuminate\Http\Request;

class SiiyaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siiyaqs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siiyaqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siiyaq  $siiyaq
     * @return \Illuminate\Http\Response
     */
    public function show(Siiyaq $siiyaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siiyaq  $siiyaq
     * @return \Illuminate\Http\Response
     */
    public function edit(Siiyaq $siiyaq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siiyaq  $siiyaq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siiyaq $siiyaq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siiyaq  $siiyaq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siiyaq $siiyaq)
    {
        //
    }
}
