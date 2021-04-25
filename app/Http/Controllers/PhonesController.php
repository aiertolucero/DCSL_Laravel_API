<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phones;

class PhonesController extends Controller
{
    public function getPhoneList(){
        return Phones::all();
    }

    public function uploadPhone(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',
        ]);
        
        $phone = new Phones;

        $phone->name = $request->name;
        $phone->description = $request->description;
        $phone->image_url = $request->image_url;

        if(!$phone->save()){
            return response()->json([
                'success' => false
            ]);
        } else {
            return response()->json([
                'success' => true
            ]);
        }
    }
}
