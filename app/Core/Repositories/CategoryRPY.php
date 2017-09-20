<?php
namespace App\Core\Repositories;

use Illuminate\Http\Request;
use App\Core\Entities\Category;

class CategoryRpy{

    public function forTables(Request $request){
        
        if($request->ajax()){
            //para datatable
        }else{
            $result = Category::orderBy('name','ASC')->paginate(2);
            return $result;
        }
    }

    public function forSave(Request $request){
        $objCategory = new Category();
        $objCategory->fill($request_>all());
        //$objCategory->name=$request->name;
        $objCategory->save();
    }

    public function forUpdate(Request $request, Category $objCategory){
        $objCategory->fill($request_>all());
        $objCategory->save();
    }
}