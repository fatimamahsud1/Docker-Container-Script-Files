<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;

use App\Models\Reservation;
class AdminController extends Controller
{
    
    public function user()
    {
        $data = user::all();
        return view("admin.users",compact("data"));
    }

   
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
     
    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $data = food::all();
                return view("admin.foodmenu",compact("data"));
    }
    public function index()
    {
            $Arr['data'] = DB::table('forms')->get();
        
                return view("admin.index",$Arr);
    }
    public function insert(Request $request)
    {

        $name = $request->post('name');
        $email = $request->post('email');
        $password = $request->post('password');
            DB::table('forms')->insert(array([
                'name' =>$name,
                'email' =>$email,
                'password'=>$password
            ]));
            $msg = "Data Inserted";
            return $msg;
        
     
       
         // echo"<pre>";
         // print_r($request->post());
    }
  
    public function update(Request $request , $id)
    {
        $data = food::find($id);
        $image = $request->image;
        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('foodimage' , $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview",compact("data"));
    }
    public function upload(Request $request)
    {
       
       $data = new food;
       $image = $request->image;
       $imagename = time(). '.' .$image->getClientOriginalExtension();
       $request->image->move('foodimage' , $imagename);
       $data->image = $imagename;
       $data->title = $request->title;
       $data->price = $request->price;
       $data->description = $request->description;
       $data->save();
       return redirect()->back();

    }
    public function orders()
    {
        $data = order::all();
        return view('admin.orders' , compact('data'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $data = order::where('name','like','%'.$search.'%')->orWhere('foodname','like','%'.$search.'%')->get();
        return view('admin.orders' , compact('data'));
    }
    public function reservation(Request $request )
    {

      

        $data = new reservation;
        $data->name = $request->username;
        $data->email = $request->email;
        $data->time = $request->coun;
        $data->person = $request->country;
        $data->date = $request->address;
        $data->save();
        return redirect()->back();  
    }
    public function viewreservation()
    {
        $data = reservation::all();
        return view("admin.adminreservation",compact("data"));
    }
   
    

}
