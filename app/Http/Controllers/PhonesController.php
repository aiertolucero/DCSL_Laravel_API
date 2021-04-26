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
            'manufacturer' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
            'imageFileName' => 'required',
            'screen' => 'required',
            'processor' => 'required',
            'ram' => 'required'
        ]);
        
        $phone = new Phones;

        $phone->name = $request->name;
        $phone->manufacturer = $request->manufacturer;
        $phone->description = $request->description;
        $phone->color = $request->color;
        $phone->price = $request->price;
        $phone->imageFileName = $request->imageFileName;
        $phone->screen = $request->screen;
        $phone->processor = $request->processor;
        $phone->ram = $request->ram;

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
    
    public function updatePhone(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
            'imageFileName' => 'required',
            'screen' => 'required',
            'processor' => 'required',
            'ram' => 'required'
        ]);

        $phone = Phones::find($id);

        $phone->name = $request->name;
        $phone->manufacturer = $request->manufacturer;
        $phone->description = $request->description;
        $phone->color = $request->color;
        $phone->price = $request->price;
        $phone->imageFileName = $request->imageFileName;
        $phone->screen = $request->screen;
        $phone->processor = $request->processor;
        $phone->ram = $request->ram;

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

    public function deletePhone($id){
        try {
            $phone = Phones::find($id);

            if($phone){
                $phone->delete();

                return response()->json([
                    'success' => true
                ]);
            } else {
                return response()->json([
                    'success' => false
                ]);
            }
        } catch(Exception $e) {
            return response()->json([
                'success' => false
            ]);
        }
    }
}
