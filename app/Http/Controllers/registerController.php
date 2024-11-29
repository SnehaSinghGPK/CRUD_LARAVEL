<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

use function PHPUnit\Framework\isEmpty;

class registerController extends Controller
{
    // register insert
    public function registerFun(Request $result){
        $data = new register;

        $data->name = $result->name;
        $data->email = $result->email;
        $data->password = $result->password;
        $data->mobile = $result->mobile;
        $data->gender = $result->gender;
        $data->city = $result->city;
        $data->course = implode(',',$result->get('course'));
        $data->address = $result->address;

        $photo = $result->file('photo');
        $photo->getClientOriginalName();
        $data->photo = $photo->getClientOriginalName();

        $path = "image";
        $photo->move($path,$photo->getClientOriginalName());

        $data->save();
        return redirect('showregister');
    }

    // showregister code
    public function showregisterFun(){
        $data = register::all();
        return view('showregister',compact('data'));
    }

    // register delete code
    public function registerdeleteFun($id){
        $data = register::find($id);
        $data->delete();
        return redirect('showregister');
    }

    // regiser edit code
    public function registereditFun($id){
        $data = register::find($id);
        return view('registeredit',compact('data'));
    }

    // register update code
    public function registerupdateFun(Request $result){
        $id = $result->id;
        $data = register::find($id);
        
        $oldpic=$data->photo;
        $photo = $result->file('photo');
        

        if(empty($photo))
        {
            $data->name = $result->name;
            $data->email = $result->email;
            $data->password = $result->password;
            $data->mobile = $result->mobile;
            $data->gender = $result->gender;
            $data->city = $result->city;
            $data->course = implode(',',$result->get('course'));
            $data->address = $result->address;
            $data->photo=$oldpic;
            $data->update();
            return redirect('showregister');
        }
        else
        {
            $data->name = $result->name;
            $data->email = $result->email;
            $data->password = $result->password;
            $data->mobile = $result->mobile;
            $data->gender = $result->gender;
            $data->city = $result->city;
            $data->course = implode(',',$result->get('course'));
            $data->address = $result->address;
            $data->photo=$photo->getClientOriginalName();
            $data->update();
            $path="image";
            $photo->move($path,$photo->getClientOriginalName());

            $path1 = public_path($path . '/' . $oldpic);
            unlink($path1);
            return redirect('showregister');
            
        }  

    }

   
  
}
