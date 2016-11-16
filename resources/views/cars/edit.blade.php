@extends('layouts.app')

@section('content')


@if (count($errors)>0)
<ul>
  @foreach ($errors->all() as $error )
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <div class="row">
  <div class="container" style="margin-top:10px">
            <form method="POST" action="{{route('home.cars.update', $car)}}"  enctype="multipart/form-data">
            {{csrf_field()}}

                           <input type="text" name="brand"  value="{{$car->brand}}" class="form-control" placeholder="brand">

              <input type="text" name="model"  value="{{$car->model}}" class="form-control" placeholder="model">
              <textarea class="form-control"  name="desc" rows="5" id="desc" placeholder="desc">{{$car->desc}}</textarea>       
              <input type="number" name="year" value="{{$car->year}}" class="form-control" placeholder="year">
              <input type="number" name="km"  value="{{$car->km}}" class="form-control" placeholder="km">
              <input type="number" name="price"  value="{{$car->price}}" class="form-control" placeholder="price">
              <select name="fueltype">
              <option value="diesel" @if ($car->fueltype == 'diesel') selected="selected" @endif>Diesel</option>
              <option value="gasoline" @if ($car->fueltype == 'gasoline') selected="selected" @endif>Gasoline</option>

              </select>    

                  <div class="row">
                    <div class="col-md-12">
                      <input type="file" id="imagesss" name="imagesss">
                    </div>
                  </div>

              </div>
            </div>
          
              <button type="submit" value="post"  name="cars" class="btn btn-primary">Update</button>
            </div>
        </div>
      </div>

</div>
</div>
</div>
@endsection