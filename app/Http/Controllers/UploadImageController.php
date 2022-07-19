<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('test',['images'=>Image::get()]);
    }
    public function upload(Request $request)
    {
        // dd($request->file('profile')->getClientOriginalName());
        $iamge = $request->profile;
        $name = time().'_'.$iamge->getClientOriginalName();
        $iamge->storeAs('public/images',$name);
        $iamge_save = new Image;
        $iamge_save->name = 'storage/images/'.$name;
        $iamge_save->save();
        return back();
    }
}
