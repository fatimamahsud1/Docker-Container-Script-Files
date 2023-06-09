<x-app-layout>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href = "/public">
  @include("admin.admincss")

  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div style= "position:relative; top :60px; right: -150px">
     <form action = "{{url('/update',$data->id)}}" method = "post"  enctype = "multipart/form-data">
        @csrf
     <div>
<label>Title</lable>
<input style = "color:blue;" type = "text"  name = "title" value = "{{$data->title}}"  required>


 
</div>
<div>
<label>Price</lable>
<input style = "color:blue;"  type = "text"  name = "price"  value = "{{$data->price}}"  required>



</div>

<div>
<label>Description</lable>
<input style = "color:blue;" type = "text"  name = "description"  value = "{{$data->description}}"  required>



</div>
<div>
<label>OLd Image</lable>
<img height = "150" width = "150 " src = "/foodimage/{{$data->image}}">



</div>
<div>
<label>New Image</lable>
<input  style = "color:blue;" type = "file"  name = "image" placeholder="insert food image"  required>



</div>
<div>
<input type = "submit" value = "Save"  >

</div>





</form>
<div>
</div>
</div>
   @inculde("admin.adminscript")
  </body>
</html>