<?php

namespace App\Http\Controllers;

use App\Http\Requests\MultiRequest;
use App\Models\MultiImages;
use App\Traits\General;
use Illuminate\Http\Request;

class MultiController extends Controller
{
    use General;
    public function muim(){
         $images = MultiImages::get();
        return view('admin.multimage.index',compact('images'));
    }
    public function store(MultiRequest $request){
      // return $request;
        $photo = $this ->SaveImage($request->file('images'),'images/multi-images/');
        MultiImages::create([
            'images' => $photo
        ]);
        $notification = array(
            'message' => 'تم حفظ الصورة',
            'alert-type' => 'success',
        );
        return redirect()-> route('multi.images')-> with($notification);
    }

    public function edit($id){
        $images = MultiImages::find($id);
        return view('admin.multimage.edit',compact('images'));
    }

    public function update(MultiRequest $request, $id){
        $images = MultiImages::find($id);
        // photo update
        if($request -> has('images')) {
            // $photo= $this -> SaveImageResize($request->file('brand_image'),'images/brand/',500,500);
            $photo = $this ->SaveImage($request->file('images'),'images/multi-images/');
            $this -> DeleteImage($images->images, 'multi-images','images/multi-images/');
            $images->update([
                'images' => $photo
            ]);
        }

        $notification = array(
            'message' => 'تم الحفظ بنجاح',
            'alert-type' => 'success',
        );
        return redirect()-> route('multi.images')-> with($notification);
    }

    public function delete($id){
        $images = MultiImages::find($id);
        $this -> DeleteImage($images->images, 'multi-images','images/multi-images/');
        $images -> delete();
        $notification = array(
            'message' => 'تم الحذف بنجاح',
            'alert-type' => 'warning',
        );
        return redirect()-> route('multi.images')-> with($notification);
    }


}
