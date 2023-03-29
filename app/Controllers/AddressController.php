<?php
    namespace App\Controllers;
    use App\Http\Paginator;
    use App\Http\Response;
    use App\Models\City;
    use App\Models\Ward;
    use App\Models\District;
    class AddressController extends BaseController{

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

        public function ward(){
            $items = Ward::paginate($this->getPerPage());
            $total = Ward::count();
            $paginator = new Paginator($this->request, $items, $total);
            $paginator->appends('city_id','2');
            $paginator->onEachSide(2);
            if($this->request->ajax()){
                $html = $this->view->render('address/ward-list',['items'=>$items, 'paginator'=>$paginator]);
                return $this->json(['data'=>$html]);
            }
            return $this->render('address/ward',['items'=>$items, 'paginator'=>$paginator]);
        }

        public function deleteWard(){
            $id = $this->request->post('id');
            $ward = Ward::find($id);
            if($this->request->ajax()){
                if($ward){
                    if($ward->delete()){
                        return $this->json([
                            'message'=>$ward->name.' has been delete successfully.'
                        ], Response::HTTP_OK);
                    }else{
                        return  $this->json([
                            'message'=>'Unable to delete ward.'
                        ], Response::HTTP_BAD_REQUEST);
                    }
                }
                return  $this->json([
                    'message'=>'Ward ID does not exists!'
                ], Response::HTTP_NOT_FOUND);
            }
            
            if($ward){
                if($ward->delete()){
                    session()->setFlash(\FLASH::SUCCESS, $ward->name.' has been delete successfully.');
                }else{
                    session()->setFlash(\FLASH::SUCCESS, 'Unable to delete ward.');
                }
            }else
            session()->setFlash(\FLASH::SUCCESS, 'Ward ID does not exists!');
            $return_url = $this->request->post('return_url','/home');
            return $this->redirect($return_url);
        }
    }

?>