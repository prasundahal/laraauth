<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cvs = Person::latest()->paginate(5);

        return view('cvs.index',compact('cvs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'social' => 'required',
            'yearexp' => 'required',
            'exp' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        Person::create($request->all());

        return redirect()->route('cvs.index')
                        ->with('success','Cv created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('cv.show',compact('person'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('cvs.edit',compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {

        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'social' => 'required',
            'yearexp' => 'required',
            'exp' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $person->update($request->all());

        return redirect()->route('cvs.index')
                        ->with('success','cv updated successfully');

}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('cvs.index')
                        ->with('success','cv deleted successfully');
    }
}
