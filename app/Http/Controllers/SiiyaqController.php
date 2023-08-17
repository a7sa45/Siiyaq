<?php

namespace App\Http\Controllers;

use App\Models\Siiyaq;
use Illuminate\Foundation\Auth\User;
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
        $siiyaqs = Siiyaq::all();
        if($siiyaqs == null)
        {
            abort(404);
        }

        return view('siiyaqs.index', ['siiyaqs' => $siiyaqs]);
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
        $data = $request->validate([
            'context'  => 'required', 'string',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        

        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            // Public Folder
            $request->image->move(public_path('images'), $imageName);
        }
        
        if($request->image){
            auth()->user()->siiyaqs()->create([
                'content' => $data['content'],
                'image' => $imageName,
            ]);
        }else{
            auth()->user()->siiyaqs()->create([
                'context' => $data['context'],
            ]);
        }
        

        return back()->with('success', 'تم فتح الساق بنجاح !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siiyaq  $siiyaq
     * @return \Illuminate\Http\Response
     */
    public function show(Siiyaq $siiyaq)
    {
        if($siiyaq == null)
        {
            abort(404);
        }
        return view('siiyaqs.show', compact('siiyaq'));
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
