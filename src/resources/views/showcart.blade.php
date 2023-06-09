<!doctype html>
<html lang="en">
  <head>
    <base  href = "/public">
    <title> Cart</title>
    <!--  tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="main.css">
    <link rel="stylesheet"href="cart.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
  <body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <a href="rida.html" class="logo">
                <img src="images/logo.png" align="">
            </a>
          </div>
                    </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="nav-btn">
                      <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                      </label>
                    </div>
                    
                    <div class="nav-links">
                        <ul>
                      <li> <a href = "#restaurant">Home</a></li>
                      <li><a href="#restaurant" target="_blank">Category</a></li>
                      <li><a href="#restaurant" target="_blank">Contact</a></li>
                      <li><a href="#restaurant" target="_blank">Blog</a></li>
                      <li style = "background-color:red;">
                        @auth
                        <a href = "{{url('/showcart',Auth::user()->id)}}">
                      Cart[{{$count}}]

                     @endauth
                     @guest
                     Cart[0]
                     @endguest
                     </a></li>
                     <li> 
        
        @if (Route::has('login'))
 
      @auth
          <li>
              <x-app-layout>

              </x-app-layout>
          </li>
      @else
         <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

          @if (Route::has('register'))
           <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
          @endif
      @endauth

@endif
</li>
   
                    
                     
                        </ul>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    
    <section id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <h1 class="font-weight-bold">Cart Products</h1>
            </div>
            </div>
    </section>
  
    <section class="mt-5">
        <div class="container">
            <div class="cart">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">Product</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                        </tr>
                       <form action = "{{url('orderconfirm')}}" method = "POST" >
                        @csrf
                            @foreach($data as $data)
                            <tr>
                                <td>
                                    <input type = "text"  name= "foodname[]" value = "{{$data->title}}" hidden = " ">
                                    {{$data->title}}</td>
                                <td>
                                <input type = "text"  name= "price[]" value = "{{$data->price}}" hidden = " "> 
                                {{$data->price}}</td>
                                <td>
                                <input type = "text"  name= "quantity[]" value = "{{$data->quantity}}" hidden = " "> 
                                {{$data->quantity}}</td>
                                
</tr>
@endforeach
@foreach($data2 as $data2)
<tr style = "position:relative; top:-310px; right:-900px;">
<td><a href = "{{url('/remove',$data2->id)}}" class= "btn btn-warning">Remove</a></td>
@endforeach
</tr>

                    </thead>
                </table>
                </div>
</div>
</div>
</section>
<section class="mt-5">
        <div class="container">
       
                <div align = "center" style = "padding : 10px;">
                <button  style = "color:blue;font-size:30px " type = "button" id = "Order">Order Now</button>


</div>
<div id = "appear" align = "center" style  = "padding : 10px; display : none;">
    <div style = "padding :10px;">
        <lable  style = "color:black;font-size:20px ">NAME</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input  type = "text" name = "name" placeholder = "Name">
</div>
<div style = "padding :10px;">
        <label   style = "color:black;font-size:20px ">PHONE</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = "number" name = "phone" placeholder = "Number">
</div>
<div style = "padding :10px;">
        <lable  style = "color:black;font-size:20px " >ADDRESS</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = "text" name = "address" placeholder = "Address">
        
</div>
<br>
<div style = "padding:10px;">

<input style = "color:black;font-size:25px " class = "btn btn-success" type = "submit"  value = "Order Confirm">

<button  style = "color:black;font-size:25px " id = "close"  type = "button " class = "btn btn-danger">Close</button>

</div>
</div>

</div>

    </section>
    </form>

  
    <script  type = "text/javascript">
        $("#Order").click(
            function()
            {
            $("#appear").show();

            }
        );
        $("#close").click(
            function()
            {
            $("#appear").hide();

            }
        );

        </script>
  
       
