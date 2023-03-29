<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;

class SearchController extends BaseController{

    public function searchForm(){
        $keyword = $_GET['search'];
        $find = Product::where('name' , 'LIKE' , '%' . $keyword . '%')->get();
        if ($this->request->ajax()){
            $html = $this->render('search/searchForm', ['find' => $find ?? []]);
            return $this->json(['data' => $html]);    
        }
        return $this->render('search/searchForm',['find' => $find ?? []]);
    }
}