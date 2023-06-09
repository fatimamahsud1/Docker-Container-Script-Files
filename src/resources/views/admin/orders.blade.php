<x-app-layout>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
    <div class = "container-scroller">
    @include("admin.navbar")
  

<div class = "container">
    <h1 align = "center" >Customer Orders</h1>
    <form method = "get"  action = "{{url('/search')}}">
        <input type = "text" name = "search" placeholder = "Search Order" style="color:blue;">
        
        <input type = "submit" value  = "Search" class   = "btn btn-success">
</form>
    <table>
        <tr align = "center">
            <td  style = "padding :30px">Name</td>
            <td style = "padding :30px">Phone Number</td>
            <td style = "padding :30px">Address </td>
            <td style = "padding :30px">FoodName</td>
            <td style = "padding :30px">Price</td>
            <td style = "padding :30px">Quantity</td>
            <td style = "padding :30px">Total Price</td>
</tr>
@foreach($data as $data)
<tr  style = "background-color :black">
    <td>{{$data->name}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->foodname}}</td>
    <td>{{$data->price}}</td>
    <td>{{$data->quantity}}</td>
    <td>{{$data->price * $data->quantity}}</td>
</tr>
@endforeach
</table>
</div>
</div>
   @inculde("admin.adminscript")
  </body>
</html>