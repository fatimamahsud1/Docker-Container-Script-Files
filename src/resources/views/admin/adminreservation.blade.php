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
    <div style = "position :relative ; top :70px;  right:-150px;">
        <table bgcolor = "grey" border = "1px">
         <tr>
            <th style = "padding :30px;">Name</th>
            
            <th style = "padding :30px;">Email</th>
            
            <th style = "padding :30px;">Time</th>
            
            <th style = "padding :30px;">Person</th>
            
            <th style = "padding :30px;">Date</th>
</tr>
@foreach($data as $data)
<tr align = "center">
<td style = "padding :30px;">{{$data->name}}</td>
            
            <td style = "padding :30px;">{{$data->email}}</td>
            
            <td style = "padding :30px;">{{$data->time}}</td>
            
            <td style = "padding :30px;">{{$data->person}}</td>
            
            <td style = "padding :30px;">{{$data->date}}</td>


</tr>
@endforeach



        </table>
</div>
</div>
   @inculde("admin.adminscript")
  </body>
</html>