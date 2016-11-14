<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tires;

class TiresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function home()
    {
        $tires= Tires::paginate(2); 
        // return view('pages.cars',['cars'=> $cars]);

        return view('/home',['tires'=> $tires]);
    }

   public function tires()
    {
        $tires= Tires::all(); 
        // return view('pages.cars',['cars'=> $cars]);

        return view('pages.tires',['tires'=> $tires],compact('tires'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request,[
            'brand'=>'required',
            'model'=>'required',
            'desc'=>'required',
            'year'=>'required',
            'price'=>'required',
        
            // 'imagesss'=>'required',
             ]);

    
        $tires=new Tires;
        $tires->brand=$request->brand;
        $tires->model=$request->model;
        $tires->year=$request->year;
        $tires->desc=$request->desc;
        $tires->price=$request->price;
        // $file = $request->file('imagesss');
        // $fileName =('C:/xampp/htdocs/auto/').$file->getClientOriginalName();
        // $request->file('imagesss')->move("images/",$fileName);
        // $tires->imagesss = 'asd';

        $tires->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tires=Tires::findOrFail($id);
       $tire->delete();
       return redirect('/home');
    }
}
