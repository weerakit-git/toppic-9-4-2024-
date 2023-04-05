<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admincontrol;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index1(){
       return view('adminpage.index');
    }

    public function index2(){
        // $page = Admincontrol::paginate(5); 
         return redirect('dashboard');

         
      
     }

    public function home(){
        return view('adminpage.home');
     }

    public function store(Request $request){
        // ตรวจสอบข้อมูล
        $request->validate([
            'title_name'=>'max:255',
            'service_image'=>'mimes:jpg,jpeg,png'
        ],
            [
                'title_name.max'=>'ห้ามป้อนตัวอักษรเกิน 255 ตัว',
                'service_image.mimes'=>'กรุณาใส่นามสกุลไฟล์ให้ถูกต้อง'
            ]
    );  

    
    if($request->file('service_image')){
        $service_image = $request->file('service_image');
        $image_name = time().'_'.$service_image->getClientOriginalName();

        if($service_image){
            $image_path = $service_image->move('img/', $image_name);
            $data = new Admincontrol;
            $data->titel = $request->title_name;
            $data->body = $request->body_name;
            $data->service_image = $image_name;
            $data->User_id = Auth::user()->id;
            $data->save(); 
        } 
    }else {
        $data = new Admincontrol;
        $data->titel = $request->title_name;
        $data->body = $request->body_name;
        $data->service_image = null;
        $data->User_id = Auth::user()->id;
        $data->save();
    }
    // if($service_image){
    //     $image_path = $service_image->move('img/', $image_name);
    //     $image_name_to_save_in_db = basename($image_path);

    // } else {
    //     $image_path = null;
    //     $image_name_to_save_in_db = null;
    // }
    
    //บันทึกข้อมูล
    
    
    return redirect('page/home')->with('success',"โพสต์เรียบร้อย");;
    }

//edit
    public function edit($id){
       $editpost = Admincontrol::find($id);
       return view('adminpage.edit', compact('editpost'));
    }
     
        //update
        public function update(Request $request , $id){
               
                $request->validate([
                    'title_name'=>'max:255',
                    'service_image'=>'mimes:jpg,jpeg,png'
                ],
                    [
                        'title_name.max'=>'ห้ามป้อนตัวอักษรเกิน 255 ตัว',
                        'service_image.mimes'=>'กรุณาใส่นามสกุลไฟล์ให้ถูกต้อง'
                    ]
            );  
            if($request->file('service_image')){
                $service_image = $request->file('service_image');
                $image_name = time().'_'.$service_image->getClientOriginalName();
    
                if($service_image){
                    $image_path = $service_image->move('img/', $image_name);
                    Admincontrol::find($id)->update([
                        'titel' => $request-> title_name,
                        'body' => $request->body_name,
                        'service_image' => $image_name
                    ]);
                } 
            }else {
                Admincontrol::find($id)->update([
                    'titel' => $request-> title_name,
                    'body' => $request->body_name,
                    'service_image' => null
                ]);
            }
            return redirect('/dashboard')->with('success',"โพสต์ข้อมูลเรียบร้อย"); 
        }

         //delete
            public function delete($id){
                $delete = Admincontrol::find($id)->forceDelete();
                return redirect()->back()->with('Delete','ลบข้อมูลแบบถาวรแล้ว');
             }


             public function show(){
                $data = Admincontrol::all();
                 return view('adminpage.home', compact('data'));
             }




            

}
