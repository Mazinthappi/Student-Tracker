<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form class="container mt-5" action="{{route('update.user')}}" method="post" >
  @csrf
  <input type="hidden" name="id" value="{{encrypt($data->id)}}">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data->name}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">Contact Number</label>
    <input type="tel" class="form-control" name="phone_no" value="{{$data->phone_no}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email"  class="form-control" name="email" value="{{$data->email}}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">D.O.B</label>
    <input type="date" class="form-control" name="date_of_birth" value="{{$data->date_of_birth}}" >
  </div>

  <div class="input-group mb-3" value="{{$data->status}}">
      <div class="input-group-prepend">
          <label class="input-group-text">Status</label>
      </div>
      <select class="custom-select" name="status"  >
      <option @if ($data-> status == 'Active') selected="selected" @endif >Active</option>
      <option @if ($data-> status == 'Inactive') selected="selected" @endif >Inactive</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>