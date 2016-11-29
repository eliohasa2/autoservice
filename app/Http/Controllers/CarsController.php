<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Tires;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()  
    {
        $cars= Cars::paginate(10); 
        $tires=Tires::paginate(2);
        // return view('pages.cars',['cars'=> $cars]);

        return view('/home')->with('cars',$cars)->with('tires',$tires);
    }

   public function cars()
    {
        $cars= Cars::all(); 
        // return view('pages.cars',['cars'=> $cars]);

        return view('pages.cars',['cars'=> $cars],compact('cars'));
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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted



    if (isset($_POST['cars'])) {
           $this->validate($request,[
            'brand'=>'required',
            'model'=>'required',
            'desc'=>'required',
            'year'=>'required',
            'km'=>'required',
            'price'=>'required',
            // 'imagesss'=>'required',
             ]);

    
        $cars=new Cars;
        $cars->brand=$request->brand;
        $cars->model=$request->model;
        $cars->year=$request->year;
        $cars->fueltype=$request->fueltype;
        $cars->km=$request->km;
        $cars->desc=$request->desc;
        $cars->price=$request->price;

        if ($request->file('imagesss')->isValid()) {
            $cars->imagesss = $request->imagesss->storeAs('images', uniqid().'.jpg', 'public');
        }

        $cars->save();
        return redirect('/home');



    } else {
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
        if ($request->file('imagesss')->isValid()) {
            $tires->imagesss = $request->imagesss->storeAs('images', uniqid().'.jpg', 'public');
        }

        $tires->save();
        return redirect('/home');
    }
}
    
     


 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        
         $car= Cars::find($id);
        return view('pages.details')->with('car',$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             $car=Cars::find($id);

             return view('cars.edit')->with(['car' => $car]);
    }


    public function tiresEdit($id)
    {
             $car=Tires::find($id);

             return view('tires.edit')->with(['car' => $car]);
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
         $this->validate($request,[
            'brand'=>'required',
            'model'=>'required',
            'desc'=>'required',
            'year'=>'required',
            'km'=>'required',
            'price'=>'required',
             ]);

        $cars=Cars::find($id);
        $cars->brand=$request->brand;
        $cars->model=$request->model;
        $cars->year=$request->year;
        $cars->fueltype=$request->fueltype;
        $cars->km=$request->km;
        $cars->desc=$request->desc;
        $cars->price=$request->price;
         if ($request->file('imagesss')) {
            $cars->imagesss = $request->imagesss->storeAs('images', uniqid().'.jpg', 'public');
        }
        $cars->save();
        return redirect('/home');


    }



    public function tiresUpdate(Request $request, $id)
    {
         $this->validate($request,[
            'brand'=>'required',
            'model'=>'required',
            'desc'=>'required',
            'year'=>'required',
            'price'=>'required',
             ]);

        $cars=Tires::find($id);
        $cars->brand=$request->brand;
        $cars->model=$request->model;
        $cars->year=$request->year;
        $cars->desc=$request->desc;
        $cars->price=$request->price;
         if ($request->file('imagesss')) {
            $cars->imagesss = $request->imagesss->storeAs('images', uniqid().'.jpg', 'public');
        }
        $cars->save();
        return redirect('/home');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted

    if (isset($_POST['delCar'])) {
        
       $car=Cars::findOrFail($id);
       $car->delete();
       return redirect('/home');



    } else {

       $tire=Tires::findOrFail($id);
       $tire->delete();
       return redirect('/home');
      
    }
}
    

}
    }

