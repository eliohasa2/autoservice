<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $cars= Cars::paginate(2); 
        // return view('pages.cars',['cars'=> $cars]);

        return view('/home',['cars'=> $cars]);
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
    
        $this->validate($request,[
            'brand'=>'required',
            'model'=>'required',
            'desc'=>'required',
            'year'=>'required',
            'km'=>'required',
            'price'=>'required',
            'imagesss'=>'required',
             ]);

    
        $cars=new Cars;
        $cars->brand=$request->brand;
        $cars->model=$request->model;
        $cars->year=$request->year;
        $cars->fueltype=$request->fueltype;
        $cars->km=$request->km;
        $cars->desc=$request->desc;
        $cars->price=$request->price;
        $file = $request->file('imagesss');
        $fileName =('C:/xampp/htdocs/auto/').$file->getClientOriginalName();
        $request->file('imagesss')->move("images/",$fileName);
        $cars->imagesss = $fileName;

        $cars->save();
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
             $cars=Cars::find($id);
             if(!cars){
                    abort(404);
             }
             return view ('/home')->within('cars',$cars);
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
         $cars->images=$request->images;
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
       $car=Cars::findOrFail($id);
       $car->delete();
       return redirect('/home');
    }


  public function imageUpload()
    {
        return view('image-upload');
    }

    /**
    * Manage Post Request
    *
    * @return void
    */
    public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        // return back()
        //     ->with('success','Image Uploaded successfully.')
        //     ->with('path',$imageName);
    }
    public function getContact(){

 return view ('/');

    }
   public function postContact(){

 $this->validate($request,[
        'fnumber'->'required'
    ]);

Mail::send('view',$data,function(){




    
})
    }
}
