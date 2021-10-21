<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function index() {

        return view('admin');
    }

    function add(Request $request) {

        $query = [
            'fullname'=>$request->fullname,
            'short_about'=>$request->short_about,
            'fb_link'=>$request->fb_link,
            'insta_link'=>$request->insta_link,
            'twitter_link'=>$request->twitter_link,
            'tiktok_link'=>$request->tiktok_link,
            'behance_link'=>$request->behance_link,
            'proffesion'=>$request->proffesion,
            'long_about'=>$request->long_about,
            'birthday'=>$request->birthday,
            'age'=>$request->age,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'study'=>$request->study,
            'cv'=>$request->cv,
            'iframe'=>$request->iframe,
            'your_photo'=>'/img/slider/default.png',
        ];

        if($request->hasFile('your_photo')) {
            $destination_path = 'img/slider';
            $image = $request->file('your_photo');
            $image_name = time () . '_' . $image->getClientOriginalName();
            $path = $request->file('your_photo')->move($destination_path, $image_name);

            $query['your_photo'] = '/' . $destination_path . '/' . $image_name;
        }

        DB::table('maininfo')->delete();

        $insert = DB::table('maininfo')->insert($query);

        if($insert){
            $message = 'info has been successfuly inserted';
            $type = 'success';
        } else{
            $message = 'Something went wrong';
            $type = 'warning';
        }

        return redirect()->back()->with('status_type', $type)->with('status', $message);

    }

    // function socialVisible(Requset $request) {
    //     if()
    // }
}
