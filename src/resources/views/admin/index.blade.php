<x-app-layout>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@include("admin.admincss")
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
 
  <body>
    <br><br>
  <div class="container-scroller">         
    @include("admin.navbar")
        <div class = "container">
            <div class = "row">
                <div class = "col-md-8">
                    <form  method = "post"  >
                        @csrf
                       @method('post')

                    <div class = "form-group">
                        <br>
                        <br>
                            <label for = "name">Name</label>
                            <input type = "name" name = "name" id = "name" class = "form-control" placeholder= "enter Name"  >
</div>
                        <div class = "form-group">
                            <label for = "email">Email</label>
                            <input type = "email" name = "email" id = "email" class = "form-control" placeholder= "enter email"  >
</div>
<div class = "form-group">
                            <label for = "password">Description</label>
  
  
                            <input type = "text" name = "password" id = "password" class = "form-control" placeholder= "enter descriptiion" >
</div>

<button type = "submit" id = "submit" class = "btn btn-primary">Submit</button>

                        </form>
</div>
</div>
<br>
<br>
<h1 align="center">SHOWING CHEF DATA</h1>
<br>

<div class  = "container">
    <div class = "row">
        <table class = "table table-bordered">
            <thead>
                <td style = "color:white;font-size:12px ">ID</td>
                <td style = "color:white;font-size:12px ">Name</td>
                <td style = "color:white;font-size:12px ">Email</td>
                <td style = "color:white;font-size:12px ">Description</td>
                <td style = "color:white;font-size:12px ">Action1</td>
                <td style = "color:white;font-size:12px ">Action2</td>


</thead>

<tbody>
      @foreach($data as $row)
      <tr>
        <td style = "color:white;font-size:12px " >{{$row->id}}</td>
        <td style = "color:white;font-size:12px ">{{$row->Name}}</td>
        <td style = "color:white;font-size:12px ">{{$row->Email}}</td>
        <td style = "color:white;font-size:12px ">{{$row->password}}</td>
        <td>
      
            <a href = "" class = "btn btn-secondary">EDIT</a>
        </td>
        <td><a href = "" class = "btn btn-danger">DELETE</a></td>
        
</tr>
      @endforeach
</tbody>
</table>
</div>

</div>
    </div>  
   
    <script>
        $(document).ready(function()
        {
$('form').submit(function(e)
{
    e.preventDefault();
    var formData= new FormData(this);
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:'/add',
        data:formData,
        type:'post',
        success:function(result){
            alert(result);
        },
        cache:false,
        contentType :false,
        processData:false
});

});
        });
        </script>

    @inculde("admin.adminscript")


  </body>
</html>