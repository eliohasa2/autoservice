<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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


}
