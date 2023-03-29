<?php
namespace App\Controllers\Auth;
use App\Controllers\BaseController;
use App\Models\Pass;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PassController extends BaseController{

    public function show_password(){
        if (!auth())
            return $this->redirect('/login');
        return $this->render('password/passwordForm');
    }
    public function password(){
        $data = $_POST;
        $user = User::where(['id' => auth()['id']])->first();
        if($user->validate2($data)){
            $user->password = password_encrypt($data['new_password']);
            if($user->save()){
                return $this->render('password/passwordSuccess',['messages'=>[
                    'success'=>'Congratulations, your have successfully changed your password.'
                ]
                ]);
            }
            $user->errors['failed'] = 'Something when wrong';
        }
        $params=[
            'current_password' => $data['current_password'],
        ];
        return $this->render('password/passwordForm', ['errors'=>$user->errors, 'params'=>$params]);
    }
    public function forgetPass(){
        return $this->render('password/forgetPassword');
    }
    public function Pass(){
        $data = $_POST;
        $name = $data['username'];
        $email = $data['email'];
        $user = User::where([
            ['username', '=', $name],
            ['email', '=', $email],
                ])->first();
        if (!$user){
            session()->setFlash(\FLASH::ERROR, 'The password or email you entered is incorrect');
            $params=[
                'username'=>$name,
                'email'=>$email
            ];
            return $this->render('password/forgetPassword',['params'=>$params]); 
        } else if($user->validate1($data)){
            $user->password = password_encrypt($data['new_password']);
            if($user->save()){
                return $this->render('password/passwordSuccess1',['messages'=>[
                    'success'=>'Congratulations, your have successfully changed your password.'
                ]
                ]);
            }
            $user->errors['failed'] = 'Something when wrong';
        }
        $params=[
            'username'=>$name,
            'email'=>$email,
            'new_password' => $data['new_password'],
        ];
        return $this->render('password/forgetPassword', ['errors'=>$user->errors, 'params'=>$params]);
    }
}