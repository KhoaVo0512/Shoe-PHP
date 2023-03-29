<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Http\Paginator;
use App\Http\Response;
use App\Models\Account;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends BaseController
{
public function product()
{
    if (!auth())    
        $this->redirect('/login');
    else {
        if (auth()['role'] != 1){
            return $this->render('errors/404');
        } else {
    $product = new Product();
    if ($product) {
        $param = [
        'brand_id' => $product->brands_id,
        'name' => $product->name,
        'price' => $product->price,
        'discount' => $product->discount,
        'image_1' => $product->image_1,
        'image_2' => $product->image_2
        ];
    }
    }
    // $insert = Product::orderBy('name', 'asc')
    // ->get();
    // echo $insert;
    return $this->render('product/productForm', ['param' => $param ?? []] );
}
}
public function update()
{
    $data = $_POST;
    $fileName = $_FILES["image_1"]["name"];
    $fileTmpName = $_FILES['image_1']['tmp_name'];
    $fileSize = $_FILES['image_1']['size'];
    $fileError = $_FILES['image_1']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    //dump($data['brand_id']);
    $fileName2 = $_FILES["image_2"]["name"];
    $fileTmpName2 = $_FILES['image_2']['tmp_name'];
    $fileSize2 = $_FILES['image_2']['size'];
    $fileError2 = $_FILES['image_2']['error'];
    $fileExt2 = explode('.', $fileName2);
    $fileActualExt2 = strtolower(end($fileExt2));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf'); 
    if (($_FILES["image_1"]["name"] != NULL) || ($_FILES["image_2"]["name"] != NULL) ){
        if (in_array($fileActualExt, $allowed) && in_array($fileActualExt2, $allowed)){
            if ($fileError == 0 && $fileError2 == 0) {
                if ($fileSize < 1000000 && $fileSize2 < 1000000 ) {
                    if($data['brand_id'] == 2){
                        $target_dir = "assets/images/product-1";
                    }else if ($data['brand_id'] == 3){
                        $target_dir = "assets/images/product-2";
                    }else if ($data['brand_id'] == 4){
                        $target_dir = "assets/images/product-3";
                    } else $target_dir = "assets/images/product-4";         
                    $fileDestination = $target_dir . DIRECTORY_SEPARATOR . basename($_FILES["image_1"]["name"]);
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $fileDir = substr($fileDestination, 46);
                    $data['image_1'] = $fileDestination;
                    $fileDestination2 = $target_dir . DIRECTORY_SEPARATOR . basename($_FILES["image_2"]["name"]);
                    move_uploaded_file($fileTmpName2, $fileDestination2);
                    $fileDir2 = substr($fileDestination2, 46);
                    $data['image_2'] = $fileDestination2;
                    
                } else {
                        session()->setFlash(\FLASH::ERROR, 'Your file is too big!');
                        $this->redirect('/admin/product');
                    }
            }   else {
                    session()->setFlash(\FLASH::ERROR, 'Opps there was an error!');
                    $this->redirect('/admin/product');
                }
        } else {
                session()->setFlash(\FLASH::ERROR, 'You can not upload this file!');
                $this->redirect('/admin/product');
            }
    } else {
        session()->setFlash(\FLASH::ERROR, 'You can not upload this file!');
        $this->redirect('/admin/product');
    }
    //dump($_FILES["image_1"]["name"]);
    $data['user_id'] = auth()->id;
    $product = new Product();
    $param = [];
    $product->fill($data);
    if ($product->validate($data)){
    if($product->save()){
    $this->session->setFlash(\FLASH::SUCCESS,"Update is successfully");
    $this->redirect('/admin/product');
    }
        else {
            $error="Some time when wrong. Please try again.";
            session()->setFlash(\FLASH::ERROR, 'Something went gone! Please try again!');
            return $this->render('product\productForm',['param' =>$param ?? [], 'error'=>$error]);
        }
    } else {
        $param = [
            'brand_id' => $product->brand_id,
            'name' => $product->name,
            'price' => $product->price,
            'discount' => $product->discount,
            'image_1' => $product->image_1,
            'image_2' => $product->image_2

        ];
        //dump($param['image_1']);
        return $this->render('product\productForm', ['errors'=>$product->errors, 'param'=>$param]);
    }
    return $this->render('product\productForm', ['errors'=>$product->errors, 'param'=>$param]);
    }
    //Product List
    public function getPerPage()
    {
        // get from request, then session
        $perPage = $this->request->get('per-page', null);
        if (!$perPage) {
            // get from session
            $perPage = session()->get('per-page', null);
            if (!$perPage) {
                // get from config
                $perPage = config('view.page.per-page', 15);
                // udpate session
                session()->set('per-page', $perPage);
            }
        } else {
            // udpate session
            session()->set('per-page', $perPage);
        }

        return $perPage;
    }

        public function product_list(){
            if (auth()['role'] != 1){
                return $this->render('errors/404');
            } else {
            $items = Product::paginate($this->getPerPage());
            $total = Product::count();
            $paginator = new Paginator($this->request, $items, $total);
            $paginator->appends('product','2');
            $paginator->onEachSide(2);
            if($this->request->ajax()){
                $html = $this->view->render('product/product-list',['items'=>$items, 'paginator'=>$paginator]);
                return $this->json(['data'=>$html]);
            }
            return $this->render('product/product',['items'=>$items, 'paginator'=>$paginator]);
            }
        }
        public function deleteProduct(){
            $id = $this->request->post('id');
            $product = Product::find($id);
            dump($id);
            if($this->request->ajax()){
                if( $product){
                    if($product->delete()){
                        return $this->json([
                            'message'=> $product->name.' has been delete successfully.'
                        ], Response::HTTP_OK);
                    }else{
                        return  $this->json([
                            'message'=>'Unable to delete ward.'
                        ], Response::HTTP_BAD_REQUEST);
                    }
                }
                return  $this->json([
                    'message'=>'Product ID does not exists!'
                ], Response::HTTP_NOT_FOUND);
            }
            $return_url = $this->request->post('return_url','/home');
            return $this->redirect($return_url);
        }    
}