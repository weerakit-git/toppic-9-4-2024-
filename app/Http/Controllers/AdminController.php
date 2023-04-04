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

    //   //การเข้ารหัสภาพ
    //   $service_image = $request->file('service_image');

    //   //generate name image
    //   $name_gen =hexdec(uniqid()); 

    //   //ดึงนามสกุลไฟล์
    //   $img_ext = strtolower($service_image->getClientOriginalExtension());
    //   $img_name = $name_gen.'.'.$img_ext;

    //   //อัพโหลดภาพ
    //   $upload_location = 'image/service';
    //   $full_path = $upload_location.$img_name;
    //   Admincontrol::insert([
    //     'service_image'=>$full_path,
    //   ]);
    //   $service_image -> move($upload_location,$img_name); 

    // $pagination = Admincontrol::pagination(5);



    $service_image = $request->file('service_image');

    //           //generate name image
    //   $name_gen =hexdec(uniqid()); 

    //   //ดึงนามสกุลไฟล์
    //   $img_ext = strtolower($service_image->getClientOriginalExtension());
    //   $img_name = $name_gen.'.'.$img_ext;

    //   //อัพโหลดภาพ
    //   $upload_location = 'image/service';
    //   $full_path = $upload_location.$img_name;
    //   Admincontrol::insert([
    //     'service_image'=>$full_path,
    //   ]);
    //   $service_image -> move($upload_location,$img_name); 



        
    if($service_image){
        $image_name = time().'_'.$service_image->getClientOriginalName();
        $image_path = $service_image->storeAs('public/img', $image_name);
        $image_name_to_save_in_db = basename($image_path);

    } else {
        $image_path = null;
        $image_name_to_save_in_db = null;
    }



    
    // $isInsertSuccess = Post_table::insert([
    //     'topic_name' => $title,
    //     'topic_info' => $content,
    //     'user_id' => $user_id,
    //     'topic_p' => $image_name_to_save_in_db,
    // ]);
    
    //บันทึกข้อมูล
    $data = new Admincontrol;
    $data->titel = $request->title_name;
    $data->body = $request->body_name;
    $data->service_image = $request->service_image;
    $data->User_id = Auth::user()->id;
    $data->save();
    
    return redirect('/dashboard')->with('success',"บันทึกข้อมูลเรียบร้อย");;
    }

//edit
    public function edit($id){
       $editpost = Admincontrol::find($id);
    //    dd($editpost->body);
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
            Admincontrol::find($id)->update([
                'titel' => $request-> title_name,
                'body' => $request->body_name,
                'service_image' => $request->service_image
            ]);
            
            return redirect('/dashboard')->with('success',"บันทึกข้อมูลเรียบร้อย"); 
        }

         //delete
            public function delete($id){
                $delete = Admincontrol::find($id)->forceDelete();
                return redirect()->back()->with('Delete','ลบข้อมูลแบบถาวรแล้ว');
             }


             public function show(){
                $data = Admincontrol::all();
                //  return view('adminpage.home', compact('data'));
                 dd($data->id);
             }




            

}
