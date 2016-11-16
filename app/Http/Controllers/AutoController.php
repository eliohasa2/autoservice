<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
class AutoController extends Controller
{
   public function index()
    {
 	return view('pages.index');
 }

 public function modal()
    {
 	return view('pages.modal');
 }

  public function carwash()
    {
 	return view('pages.carwash');
 }

  public function tires()
    {
 	return view('pages.tires');
 }

  public function services()
    {
 	return view('pages.services');
 } 
 
 public function cars()
    {
 	return view('pages.cars');
 }


public function sendMail()
    {
  return view('pages.sendMail');
 }

 public function postMail(Request $request){
// $this->validate($request,[
//   'fnumber'=>'required|integer',
//   'fname'=>'required|string',
//   'fdate'=>'required',
//   'fname'=>'required'
//   ]);

// echo 'hi';exit;

$data=array(
  'type'=>$request->type,
'fname'=>$request->fname,
'fnumber'=>$request->fnumber,
'date'=>$request->date,
'time'=>$request->time,

  );
// echo 'hi';exit;
// 
Mail::send('pages.emails',$data,function($messagee) use ($data){
$messagee->from('NewReservation@readingautoservices.com');
$messagee->to('Readingautoservices1@gmail.com');

$messagee->subject('New Reservation');

 });
return redirect('/');

}

}
 // arsimbraha@hotmail.com