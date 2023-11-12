<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Room::all();
        return view('home' , compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(PostRequest $request){
        //mengubah nama file
        $extention = $request->file('uploadImage')->getClientOriginalExtension();
        $newName = md5($request->file('uploadImage')->getClientOriginalName().Carbon::now()) . '.' . $extention;
        

        $path = public_path('/image');
        $request->file('uploadImage')->move($path, $newName);

        $inputanData = [
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'image'=> $newName,
        ];

        $data = Room::create($inputanData);

        return redirect()->route('home')->with('success','Data Telah Ditambahkan');
    }
}
