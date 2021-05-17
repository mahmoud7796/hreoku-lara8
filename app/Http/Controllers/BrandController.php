<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Traits\General;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class BrandController extends Controller
{
    use General;

    public function __construct(){
     // $this -> middleware('auth');
    }

   public function index(){
       $brands = Brand::get();
       return view('admin.brand.index', compact('brands'));
   }

    public function store(BrandRequest $request){
      // return $request;
       // $photo= $this -> SaveImageResize($request->file('brand_image'),'images/brand/',500,200);
        $photo = $this ->SaveImage($request->file('brand_image'),'images/brand/');
        Brand::create([
           'brand_name' => $request -> brand_name,
            'brand_image' => $photo
        ]);
        $notification = array(
            'message' => 'تم الحفظ بنجاح',
            'alert-type' => 'success',
        );
        return redirect()-> route('brand.index')-> with($notification);
    }

    public function edit($id){
       $brands = Brand::find($id);
       return view('admin.brand.edit',compact('brands'));
    }
    public function update(BrandRequest $request, $id){
         $brands = Brand::find($id);
      // photo update
        if($request -> has('brand_image')) {
           // $photo= $this -> SaveImageResize($request->file('brand_image'),'images/brand/',500,500);
            $photo = $this ->SaveImage($request->file('brand_image'),'images/brand/');
           // $this -> DeleteImage($brands->brand_image, 'brand','images/brand');
            $brands->update([
                'brand_image' => $photo
            ]);
        }

        // remain inputs update
        $brands -> update([
            'brand_name' => $request -> brand_name,
        ]);

        $notification = array(
            'message' => 'تم التعديل بنجاح',
            'alert-type' => 'success',
        );
        return redirect()-> route('brand.index')-> with($notification);
    }

    public function delete($id){
       $brand = Brand::find($id);
     //  $this -> DeleteImage($brand->brand_image, 'brand','images/brand');
       $brand -> delete();
        $notification = array(
            'message' => 'تم الحذف بنجاح',
            'alert-type' => 'warning',
        );
        return redirect()-> route('brand.index')-> with($notification);
    }

}
