<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    function add(Request $request) { 

        $query = [
            'portfolio_photo'=>'',
            'portfolio_name'=>$request->portfolio_name,
            'portfolio_desc'=>$request->portfolio_desc,
            'photo_link'=>$request->photo_link,
            'created_at' => \Carbon\Carbon::now(),
        ];

        if($request->hasFile('portfolio_photo')) {
            $destination_path = 'img/portfolio';
            $image = $request->file('portfolio_photo');
            $image_name = time () . '_' . $image->getClientOriginalName();
            $path = $request->file('portfolio_photo')->move($destination_path, $image_name);

            $query['portfolio_photo'] = '/' . $destination_path . '/' . $image_name;
        }

        $insert = DB::table('portfolio')->insert($query);

        if($insert){
            $message = 'info has been successfuly inserted';
            $type = 'success';
        } else{
            $message = 'Something went wrong';
            $type = 'warning';
        }

        return redirect()->back()->with('status_type', $type)->with('status', $message);

    }

    public function PortfolioDelete($id){
        $delete = DB::table('portfolio')
                    ->where('id', $id)
                    ->delete();
        return redirect('admin');      
    }
}
