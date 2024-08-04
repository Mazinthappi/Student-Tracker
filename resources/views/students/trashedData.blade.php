<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<p>{{session()->get('messages')}}</p>
<!-- <p>{{session()->get('messages')}}</p> -->
    
<table class="container table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone_no</th>
      <th scope="col">Email</th>
      <th scope="col">Date of birth	</th>
      <th scope="col"> Status	</th>
      <th scope="col"> Action	</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($users as $user)
    <tr>
      <!-- <th scope="row">{{$loop->iteration}}</th> -->
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->phone_no}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->date_of_birth	}}</td>
      <td>@if ($user->trashed()) Trashed @else {{$user->status}} @endif</td>
      <td>
        <a href="{{route ('activate.user',encrypt($user->id))}}" class="btn btn-success" >Activate user</a>
        <a href="{{route ('forceDelete.user',encrypt($user->id) )}}" class="btn btn-danger">Permenant Delete</a>
      </td>
    </tr>
    @endforeach
    
    
    
    
  </tbody>
</table>


</body>
</html>


