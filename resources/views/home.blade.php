@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      

<div class="container" style="margin-top:10px">

<button onclick="location.href = '/register'" id="myButton" class="btn btn-success" >Register New Admin</button>

<button type="button" class="btn btn-success">Insert</button>
<button type="button" class="btn btn-danger">Update </button>
<button type="button" class="btn btn-warning">Delete</button>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


<div class="container" style="margin-top:10px">
<button type="button" class="btn btn-success">Insert</button>
<button type="button" class="btn btn-danger">Update </button>
<button type="button" class="btn btn-warning">Delete</button>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
    </div>
</div>
@endsection
