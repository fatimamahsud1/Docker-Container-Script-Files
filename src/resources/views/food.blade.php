<section class="product-section bg-img py-3">
        <div class="container">
            <div class=" row justify-content-center pb-5">
                <div class="col-md-7 heading-section text-center">
                    <h2 class="font-weight-bold text-color glow">
                        Aylanto's Week
                    </h2>
                </div>
            </div>
           
            <div class="row">
               
                <!----->
                @foreach($data as $data)
            
<form action = "{{url('/addcart',$data->id)}}" method = "post" >
    @csrf
                 <div class="col-md-12 d-flex">
                    <div class="product glow">
                    <div  style = "background-image:url('/foodimage/{{$data->image}}');" class="img d-flex align-items-center justify-content-center"
                    style="background-image:url(images/09.jpg);">
                    
                     
                     </div>
                     <div class="text text-center">
                     <span style = "color:white;"  class="title">{{$data->title}}</span>
                         <h2  style = "color:white;" class="description">{{$data->description}}</h2>
                         <span class="price">{{$data->price}}</span>
                         <br>
                         <input type = "number" name  = "quantity" min = "1" value = "1"  style = "width:130px;">&nbsp;&nbsp;&nbsp;
                         <input type= "submit" value = "ADDCART">
                     </div>

                </div>  
</div>
</form>
                @endforeach
            </div>         
</div>
    </section>