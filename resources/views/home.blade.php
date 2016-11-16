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
  <button onclick="location.href = '/register'" id="myButton" class="btn btn-success" >Register New Admin</button>
   <button type="button"  data-toggle="modal" data-target="#myModal2" class="btn btn-success">Insert</button>


      <!-- Modal -->
      <form action="/home" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="modal fade"  id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Create</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="brand" class="form-control" placeholder="brand">

               <input type="text" name="model" class="form-control" placeholder="model">
              <textarea class="form-control" name="desc" rows="5" id="desc" placeholder="desc"></textarea>       
              <input type="number" name="year" class="form-control" placeholder="year">
              <input type="number" name="km" class="form-control" placeholder="km">
              <input type="number" name="price" class="form-control" placeholder="price">
              <select name="fueltype">
                <option value="diesel">Diesel</option>
                <option value="gasoline">Gasoline</option>

              </select>    
              <div class="panel-body">

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif

                  <div class="row">
                    <div class="col-md-12">
                      <input type="file" id="imagesss" name="imagesss">
                    </div>
                  </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" value="post"  name="cars" class="btn btn-primary">Insert</button>
            </div>
          </div>
        </div>
      </div>
    </form>



    <form  method="POST">
      {{ csrf_field() }}

      <div class="modal fade"  id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Edit</h4>
            </div>
            <div class="modal-body">
              <input type="text" name="brand" class="form-control"  placeholder="id">
              <input type="text" name="brand" class="form-control"  placeholder="brand">
              <input type="text" name="model" class="form-control"  placeholder="model">
              <textarea class="form-control" name="desc" rows="5" id="desc" placeholder="desc"></textarea>       
              <input type="hidden" name="_method" value="put">
              <input type="number" name="year" class="form-control" placeholder="year">
              <input type="number" name="km" class="form-control"  placeholder="km">
              <input type="number" name="price" class="form-control"   placeholder="price">
              <select name="fueltype">
                <option value="diesel">Diesel</option>
                <option value="gasoline">Gasoline</option>

              </select>    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit"  value="edit" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </form>


<!-- @foreach ($cars as $car)
<form class="" action="/home/{{$car->id}}" method="post">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="submit" name="name" value="delete"> 
  


</form>
@endforeach

-->
<h2>Cars</h2>
<table class="table" id="example">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th>Brand</th>
      <th>Model</th>
      <th>desc</th>
      <th>year</th>
      <th>price</th>
      <th>km</th>
      <th>fueltype</th>
      <!-- <th>created_at</th> -->
      <th>imagess</th>


    </tr>
  </thead>
  <tbody>
    <tr class="success">
      @foreach ($cars as $car)

      <tr class="success">
        <td><a type="button" class="btn btn-danger" href="{{route('home.cars.edit', $car)}}" class="btn btn-success">Update</a>
        </td>
        <td><form class="" class="btn"  action="/home/{{$car->id}}" method="post">
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="_token" value="{{ csrf_token()}}">
          <input type="submit" name="delCar" value="delete"> 



        </form>
      </td>
      <td>{{$car->brand}}</td>
      <td>{{$car->model}}</td>
      <td>{{$car->desc}}</td>
      <td>{{$car->year}}</td>
      <td>{{$car->price}}</td>
      <td>{{$car->km}}</td>
      <td>{{$car->fueltype}}</td>
      <!-- <td>{{$car->created_at}}</td> -->
      <td><img src="{{Storage::url($car->imagesss)}}" width="30px" alt="Image" class="img-responsive"></td>


    </tr>
  </tbody>
  @endforeach
</tr>
</tbody>
</table>
{{ $cars->links() }}
</div>


<div class="container" style="margin-top:10px">



  <!-- Modal --><form action="/home" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="modal fade"  id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Create</h4>
        </div>
        <div class="modal-body">
          <input type="text" name="brand" class="form-control" placeholder="brand">
          <input type="text" name="model" class="form-control" placeholder="model">
          <textarea class="form-control" name="desc" rows="5" id="desc" placeholder="desc"></textarea>       
          <input type="number" name="year" class="form-control" placeholder="year">
<!--           <input type="number" name="km" class="form-control" placeholder="km"> -->
          <input type="number" name="price" class="form-control" placeholder="price">
       <!--    <select name="fueltype">
            <option value="diesel">Diesel</option>
            <option value="gasoline">Gasoline</option>

          </select>  -->   
          <div class="panel-body">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

              <div class="row">
                <div class="col-md-12">
                  <input type="file" id="imagesss" name="imagesss">
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" value="post"  name="submit" class="btn btn-primary">Insert</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- <h2>Tires</h2> -->
  <!-- <button type="button"  data-toggle="modal" name="tires" data-target="#myModal5" class="btn btn-success">Insert</button> -->
<!--  -->
<!-- <table class="table" id="example">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th>Brand</th>
      <th>Model</th>
      <th>desc</th>
      <th>year</th>
      <th>price</th>
      <!-- <th>created_at</th> -->
      <!-- <th>imagess</th> -->


    </tr>
  </thead>
  <tbody>
    <tr class="success">
      @foreach ($tires as $tire)

     <!--  <tr class="success">
        <td><a type="button" class="btn btn-danger" href="{{route('home.tires.edit', $tire)}}" class="btn btn-success">Update</a>
        </td> -->
   <!--      <td><form class="" class="btn"  action="/home/{{$tire->id}}" method="post">
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="_token" value="{{ csrf_token()}}">
          <input type="submit" name="delTire" value="delete"> 



        </form> -->
     <!--  </td>
      <td>{{$tire->brand}}</td>
      <td>{{$tire->model}}</td>
      <td>{{$tire->desc}}</td>
      <td>{{$tire->year}}</td>
      <td>{{$tire->price}}</td>
      <!-- <td>{{$tire->created_at}}</td> -
            <!-- <td><img src="{{Storage::url($car->imagesss)}}" width="30px" alt="Image" class="img-responsive"></td> --> 

    </tr>
  </tbody>
  @endforeach
</tr>
</tbody>
</table>
<!-- {{ $tires->links() }} -->
</div>
</div>
</div>
@endsection


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>
<script type="text/javascript">
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#showimages').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#inputimages").change(function () {
      readURL(this);
    });
  </script>
</script>