<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<ul class="container border mt-5 ">
  <div class="container">
    <li>name: {{$data->name}}</li>
    <li>email:{{$data->email}}</li>
    <li>status: {{$data->status}}</li>
  
  
<hr>
<li>addres line:{{$data->address->address_line_1}}</li>
<li>city:{{$data->address->city}}</li>
<li>pin:{{$data->address->post_code}}</li>
<hr>
<li>orders</li>
</div>
 
<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
      <td>orderID</td>
      <td>price</td>
      <td>status</td>
      <td>placed at</td>
    </tr>
  </thead>
  @foreach ($data->orders as $order)
  <tbody>
    <td>{{$order->id}}</td>
    <td>{{number_format($order->price)}}</td>
    <td>{{$order->status_text}}</td>
    <td>{{$order->created_at}}</td>
  </tbody>
  @endforeach

</table>


</ul>
</body>
</html>
