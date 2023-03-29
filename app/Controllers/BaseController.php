<?php
namespace App\Controllers;

use League\Plates\Engine;
use App\Http\Response;
use App\Traits\PaginatorTrait;
use Illuminate\Pagination\Paginator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
class BaseController{
    public $redirect = '/home';
    /**
     * @var \League\Plates\Engine;
     */
    
    public $view;

    /**
     * @var \App\Http\Request;
     */
    public $request;
    
    /**
     * @var \App\Http\Response;
     */
    public $response;

    /**
     * @var \App\Http\Session\Session
     */
    public $session;
    use PaginatorTrait;
    public function __construct(){
        $this->init();
        if(!$this->authorize()){
            redirect($this->redirect);
        }
    }
    
    public function init(){
        $this->request = request();
        $this->session = session();
        $this->request->setSession($this->session);
        $this->response = new Response();
        $this->view = new Engine(config('view.path'));
        Paginator::currentPageResolver(function($pageName='page'){
             return $this->request->get('page', 1);
        });

    }
    
    /**
     * @return void
     */
    public function authorize(){
        return true;
    }

    public function redirect($route, $statusCode = 302, $header = []){
        $response = new RedirectResponse($route, $statusCode, $header);
        return $response->send();
    }

    public function json($data=[],$status = 200, $header = []){
        $response = new JsonResponse($data, $status, $header);
        return $response->send();
    }

    /**
     * @return void
     */
    
    public function render($view, $data = []){
        $this->response->headers->set('Content-Type','text/html');
        $this->response->setStatusCode(Response::HTTP_OK);
        $html = $this->view->render($view, $data);
        $this->response->setContent($html);
        $this->response->prepare($this->request);
        return $this->response->send();

    }

}
?>