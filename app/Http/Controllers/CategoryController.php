<?php

namespace App\Http\Controllers;

use App\Category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use GeneralTrait;
   public function index(){
       return response()->json(Category::select('id','name_'.app()->getLocale().' as name')->get());
   }
   public function show(Request $request){

       $category=Category::find($request->id);
    if(!$category){
        return $this->returnError('001','هذا القسم غير موجود');
    }

    return $this->returnData('category',$category);

   }
}
