<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

 
  

<!-- <p>{{session()->get('messages')}}</p> -->
<p>{{session()->get('messages')}}</p>

<h4 class="ml-5 ">Welcome <span class="text-primary">{{auth()->user()->name}}</span></h4>
<a href="{{route('do.logout')}}" class="btn btn-danger ml-5">Logout</a>
    <div class="container Add my-2    d-flex flex-row justify-content-end ">
    <a href="{{route('create.user')}}">
        <button type="button" class="btn btn-warning">  Add User</button>
    </a>
    <a href="{{route('trashedData.user')}}">
        <button type="button" class="btn btn-info ml-2">  Trashed Datas</button>
    </a>
    </div><hr class="border border-5">
<table class="container table table-striped table-hover border border-dark">
  <thead class="border border-dark">
    <tr class="border border-dark">
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone_no</th>
      <th scope="col">Email</th>
      <th scope="col">Date of birth	</th>
      <th scope="col"> Status	</th>
      <th scope="col"> orders	</th>
      <th scope="col"> Action	</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$users->firstItem() + $loop->index}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->phone_no}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->date_of_birth	}}</td>
      <td>@if ($user->trashed()) Trashed @else {{$user->status}} @endif</td>
      <td>{{$user->orders_count}}</td>
      <td>
        <a href="{{route ('view.user',encrypt($user->id))}}" class="btn btn-secondary" >view</a>
        <a href="{{route ('edit.user',encrypt($user->id))}}" class="btn btn-primary" >Edit</a>
        <a href="{{route ('delete.user',encrypt($user->id) )}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
    
    
    
    
  </tbody>
</table>
<!-- pagination link -->
 <div class="d-flex flex-row justify-content-center">
{{$users->links()}}
 </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>


