<?php
namespace App\Controllers;

use App\Models\Product;

class HomeController extends BaseController{

    public function index(){
        return $this->render('home/index');
    }
    public function find(){

        $keyword = $_GET['search'];
        $find = Product::where('name' , 'like' , ' %' . $keyword . '%')->get();
        if ($this->request->ajax()){
            $html = $this->render('product/productFrom', ['find' => $find ]);
            return $this->json(['data' => $html]);    
        }
        return $this->render('product/productForm');
    }
}   