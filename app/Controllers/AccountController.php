<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Account;


class AccountController extends BaseController
{
public function account()
{
    if (!auth())    
        $this->redirect('/login');
    else {
    $account = Account::where(['user_id' => auth()['id']])->first();
    if ($account) {
        $param = [
        'full_name' => $account->full_name,
        'location' => $account->location,
        'phone' => $account->phone,
        'avatar' => $account->avatar,
        'avatar_status' => $account->avatar_status
        ];
    }else {
        $param = [
            'avatar_status' => '0'
        ];
    }
    }
    return $this->render('account/accountForm', ['param' => $param ?? []]);
}
public function update()
{
    $data = $_POST;
    $fileName = $_FILES["avatar"]["name"];
    $fileTmpName = $_FILES['avatar']['tmp_name'];
    $fileSize = $_FILES['avatar']['size'];
    $fileError = $_FILES['avatar']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
    if ($_FILES["avatar"]["name"] != NULL){
        if (in_array($fileActualExt, $allowed)){
            if ($fileError == 0) {
                if ($fileSize < 1000000) {
                    $target_dir = "assets/images/download";
                    $fileDestination = $target_dir . DIRECTORY_SEPARATOR . basename($_FILES["avatar"]["name"]);
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $fileDir = substr($fileDestination, 46);
                    $data['avatar'] = $fileDestination;
                    $data['avatar_status'] = 1;
                } else {
                        session()->setFlash(\FLASH::ERROR, 'Your file is too big!');
                        $this->redirect('/account');
                    }
            }   else {
                    session()->setFlash(\FLASH::ERROR, 'Opps there was an error!');
                    $this->redirect('/account');
                }
        } else {
                session()->setFlash(\FLASH::ERROR, 'You can not upload this file!');
                $this->redirect('/account');
            }
    }else $data['avatar_status'] = 0;
    $account = Account::where(['user_id'=>auth()['id']])->first();
    if(!$account)
        $account = new Account();
    $data['user_id'] = auth()->id;
    $account->fill($data);
    $account->avatar_status = isset($_POST['avatar_status']) ? 1 : 0;
    if ($account->validate($data)){
    if($account->save()){
    $this->session->setFlash(\FLASH::SUCCESS,"Update is successfully");
    $this->redirect('/account');
    }
        else {
            $error="Some time when wrong. Please try again.";
            session()->setFlash(\FLASH::ERROR, 'Something went gone! Please try again!');
            return $this->render('account\AccountForm',['param' =>$param ?? [], 'error'=>$error]);
        }
    } else {
        $param = [
            'phone' => $account->phone,
            'full_name' => $account->full_name,
            'location' => $account->location,
            'avatar' => $account->avatar,
            'avatar_status' => $account->avatar_status

        ];
        return $this->render('account\AccountForm', ['errors'=>$account->errors, 'param'=>$param]);
    }
}
}