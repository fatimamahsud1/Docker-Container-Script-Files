<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section id="reser">
 
<section class="book-section img" 
style="background-image: url(images/reservation-bg.jpg);">
<div class="container">
    <div class="row d-flex">
        <div class="col-md-7 make-reservation p-4 px-md-5 pb-md-5">
            <div class="heading-section mb-5 text-center">
                <h2 class="mb-4">Make A Reservation</h2>
            </div>
                            <form method = "post" action="{{url('/reservation')}}" id = "registration">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                <input type = "text" class = "form-control" id = "username" name = "username" placeholder = "Username"/>
                                <br/>
                            </div>
                            </div>
                            <div class = "col-lg-6">
                                <div class="form-group">
                                    <input type = "text" class = "form-control" id = "email" name = "email" placeholder = "Email"/>
                                    <br/>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                <input type = "time" class = "form-control" id = "coun" name = "coun" placeholder = "Select Time"/>
                                <br/>
                            </div>
                            </div>
                            <div class = "col-lg-6">
                                <div class="form-group">
                                    <input type = "number" class = "form-control" id = "country" name = "country" placeholder = "Enter Person"/>
                                    <br/>
                                </div>
                            </div>
                           
                        </div>
                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                <input type = "date" class = "form-control" id = "address" name = "address" placeholder = "date"/>
                                
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <button  type = "submit" class = "btn btn-primary"  class="btn btn-book py-3 px-5">Submit</button>
                            </div>
                        </div>
                        <br>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
</body>
</html>
   
