<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<style>
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
    body{
        margin:0;
    padding:0;
    font-family:sans-serif;
        background-image: url(https://images.unsplash.com/photo-1488841887379-29a9388480e4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1077&q=80);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        
     }

        </style>
        </head>

<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  
<h1 class="text-center text-dark"> Traniee Table</h1>


<br>

<!--@if(isset($input))

@foreach($input as $key => $value)

@if($key != "_token")
{{$key}} => {{$value}}
<br>
@endif

@endforeach


@endif-->
@if(isset($all_traniee))
<table class="table table-dark table-striped">
  <thead>
    <tr>
    <th scope="col">National ID</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
      @foreach($all_traniee as $key => $input)
    <tr>
    <th scope="row">{{$input['national_id']}}</th>
      <th scope="row">{{$input['fullname']}}</th>
      <td>{{$input['email']}}</td>
      <td>{{$input['mobile']}}</td>
      <td>{{$input['address']}}</td>
      <td ><img src="/images/{{$input['image']}}" style="width: 80px;height:80px"></td>
      <td><a href="admin/{{$input['id']}}"><button type="button" class="btn btn-danger">delete</button></a></td>
      <td><a href="edit/{{$input['id']}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endif
  
<!-- This design is created by manoj chauhan  -->
</body>
</html>
