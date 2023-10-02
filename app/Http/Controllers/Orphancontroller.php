<?php

namespace App\Http\Controllers;

use App\Models\Orphan;
use DateTime;
use Illuminate\Http\Request;

class Orphancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orphans=Orphan::latest()->paginate(5);
        return view('orphans.index',compact('orphans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orphans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inFields=$request->all();
        $now=new DateTime();
        $dob=new DateTime($inFields['dob']);
        $dif =$now->diff($dob);
        $strval=strval($dif->y);
        $age=array('age'=>$strval);
        $fields=array_merge($inFields,$age);
        // dd($fields);

        Orphan::create($fields);
        return redirect('orphans')->with('successful','Successfully recorded new member!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orphan=Orphan::find($id);
        return view('orphans.show')->with('orphan',$orphan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orphan=Orphan::find($id);
        return view('orphans.edit')->with('orphan',$orphan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $infields=$request->all();
        $orphan=Orphan::find($id);
        $a=new DateTime();
        $b=new DateTime($infields['dob']);
        $int=$a->diff($b);
        $yrs=array('age'=>$int->y);
        $fields=array_merge($infields,$yrs);
        $orphan->update($fields);

        return redirect('orphans')->with('Successful','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Orphan::destroy($id);
        return redirect('orphans')->with('Deleted','Successfully Deleted record!');
    }
}
