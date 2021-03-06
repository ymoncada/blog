<?php
namespace App\Core\Repositories;

use Illuminate\Http\Request;
use App\Core\Entities\Category;

class CategoryRpy{

    public function forTables(Request $request){
        
        if($request->ajax()){
            //para datatable
        }else{
            $filter=$request->filter;
            $result = Category::orderBy('name','ASC')
            ->where('name','LIKE',"%$filter%") 
            ->paginate(4)->appends('filter',$filter);
            return $result;
        }
    }

    public function forSave(Request $request){
        $objCategory = new Category();
        $objCategory->fill($request->all());
        //$objCategory->name=$request->name;
        $objCategory->save();
    }

    public function forUpdate(Request $request, Category $objCategory){
        $objCategory->fill($request->all());
        $objCategory->save();
    }
}