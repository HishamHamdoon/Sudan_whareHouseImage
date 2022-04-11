<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Photographer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Photo;
// namespace App\Models;

class PhotoController extends Controller
{
    public function getPhoto(){

        return Photo::get();
    }
    public function createPhoto(){

        return view('photos.create');
    
        // return "hello";
    }

    public function storePhoto(Request $request){
        //upload an image
        //get imahe extension
        $file_extension = $request->ph_photo->getClientOriginalExtension();
        //set image name from time formate 
        $file_name = time().'.'.$file_extension;
        //specify the path
        $path = 'images/photog';
        //move photo to specific folder
        $request->ph_photo->move($path,$file_name);
        //make validation
        $rules = $this->getRules();// get rules of validation
        $messages = $this->getMessages();// get validation messages
     
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
     
        Photo::create([
            'name' => $request->ph_name,
            'title' => $request->ph_title,
            'body' => $request->ph_body,
            'photo' => $file_name,
            'user_id' => Auth()->user()->id,
     ]);
    //return back
    return redirect()->back()->with(['msg'=>"data inserted Successfully"]);

    }

    
    public function getPhotoUser( ){
        $id  = Auth()->user()->id;
         $photo = User::find($id);

        $photos = $photo->photo;
        // return $photos;
        return  view('photos.allphotos',compact('photos'));
    }
    //delete photo based on id
    public function deletePhoto($id){
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->route('dashboard')->with(['msg'=>'Photo Deleted Successfully']);
    }
    //edit function to route to update function

    //edit photo to route to update function based on id
    public function editPhoto($id){
        $photo = Photo::find($id);
        $photo = Photo::select('id','name','title','body','photo')->find($id);
        return view('photos.edit',compact('photo'));
    }

    // public function updatePhoto(Request $request,$id){

    //   $photo = Photo::find($id);
    
    //   $photo->update($request->all());
    // //    return $photo;
    // //   $photo->save();
    //   return redirect()->route('dashboard')->with(['msg'=>'Record updated succefully']);
    
    // }

    //update data
    public function updatePhoto(Request $request,$id){
        $photo = Photo::find($id);
        //update data
        // $photo->update($request->all());
        $photo->update($request->all());
        // return $photo;
        return redirect()->route('dashboard')->with(['msg'=>'Record updated succefully']);
      }
    public function show($id){

        $photo = Photo::with('user')->find($id);
        $name  = $photo->user->name;
        $email = $photo->user->email;
        return view('photos.show',compact('photo','name','email'));
        
    }

    public function adminshow($id){
        $photo = Photo::with('user')->find($id);
        $name  = $photo->user->name;
        $email = $photo->user->email;
        return view('photos.admin_show',compact('photo','name','email'));
        
    }

    //index function to show all of photos
    public function index(){

        $photos = Photo::with('user')->get();
        return view('photos.index',compact('photos'));
        // return "this is index page";

    }

     //function to return validation rules
   protected function getRules(){
    return   $rules = [
     'ph_name' => 'required|max:10|',
     'ph_title' => 'required',
     'ph_body' => 'required',
     'ph_photo' => 'required',
 ];
  }

 //function to return validation messages
  protected function getMessages(){
    return $messages = [
     'name.required' => 'يجب إدخال  إسم العرض',
     'title.required' => 'يجب إدخال  العنوان ',
     'body' => '   يجب إدخال الوصف',
     'photo.required' => 'يجب إدخال الصورة',
    ];
  }
}
