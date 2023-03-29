<?php
namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Traits\UserAuthenticateTrait;

class LoginController extends BaseController{

    use UserAuthenticateTrait;

    public function showLoginForm(){
        if (!check_login()){
            $encryptedCredentials = $_COOKIE['credentials'] ?? null;
            if ($encryptedCredentials){
                $decryptedCredentials = decrypt($encryptedCredentials, ENCRYPTION_KEY);
                $credentials = unserialize($decryptedCredentials);
                $user = $this->authenticate($credentials);
                if ($user) {
                    $_SESSION['user'] = serialize($user);
                }
            }
            
        }
        if(check_login() == true) {
            redirect("/home");
        }
        $error = [];
        return $this->render('auth/login');
    }
    public function login(){
        $credentials = $this->getCredentials();
        $user = $this->authenticate($credentials);
       if ($user){
            $user->password = null; 
            session()->set('user', serialize($user));
            if (isset($_POST['remember_me'])){
                $str = serialize($credentials);
                $encrypted = encrypt($str, ENCRYPTION_KEY);
                setcookie('credentials', $encrypted, mktime(23, 59, 59, 01, 30, 2022));
            }
            $this->session->setFlash(\FLASH::SUCCESS,"Login is successfully");
            $this->redirect('/home');
        }
        $errors[] = "Username or password is invalid!";
        return $this->render('auth/login', ['errors' => $errors]);
    }
    public function logout(){
        $this->signout();
        $this->session->setFlash(\FLASH::INFO,"Bye... See you again.");
        $this->redirect('/home');
    }

    public function getCredentials(){
        return [
            'username' => $this->request->post('username', null),
            'password' => $_POST['password'] ?? null
        ];
    }
}