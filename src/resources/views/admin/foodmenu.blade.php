<x-app-layout>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div style= "position:relative; top :60px; right: -150px">
     <form action = "{{url('/uploadfood')}}" method = "post"  enctype = "multipart/form-data">
        @csrf
     <div>
<label>Title</lable>
<input style = "color:blue;" type = "text"  name = "title" placeholder="write a title"  required>



</div>
<div>
<label>Price</lable>
<input style = "color:blue;"  type = "text"  name = "price" placeholder="enter price"  required>



</div>
<div>
<label>Image</lable>
<input  style = "color:blue;" type = "file"  name = "image" placeholder="insert food image"  required>



</div>
<div>
<label>Description</lable>
<input style = "color:blue;" type = "text"  name = "description" placeholder="enter food description"  required>



</div>
<div>
<input class = "save" type = "submit" value = "Save"  >

</div>





</form>
<div>
<table bgcolor = "black">
<tr>
<th style = "padding:30px">Food Name</th>
<th style = "padding:30px">Price</th>
<th  style = "padding:30px">Description</th>
<th style = "padding:30px">Image</th>
<th style = "padding:30px">Action</th>
<th style = "padding:30px">Action2</th>



</tr>
@foreach($data as $data)
<tr align = "center">
<td >{{$data->title}}</td>
<td>{{$data->price}}</td>
<td>{{$data->description}}</td>
<td><img height = "150" width = "150" src = "/foodimage/{{$data->image}}" </td>
<td><a href= "{{url('/deletemenu' , $data->id)}}">Delete</a></td>
<td><a href= "{{url('/updateview' , $data->id)}}">Update</a></td>



</tr>
@endforeach




</table>




</div>



</div>
</div>
   @inculde("admin.adminscript")
   
  </body>
</html>