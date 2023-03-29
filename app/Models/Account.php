<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 class Account extends Model{
    //use SoftDeletes; //Sd phuong thuc xoa mem
    /**
     * Ten bang, neu khong co thuoc tinh nay
     * Eloquent se lay ten theo ten cua Model o dang so nhieu
     * 
     * @var string
     */
    public $table = 'account';

    /**
     * sd cac thuoc tinh created_at va update_at bang
     * @var boolean
     */
   public $timestamps = true;
   public $errors=[];
    /**
     * 
     * @var array
     */
    protected $fillable = [
        'user_id',
        'full_name',
        'location',
        'avatar',
        'avatar_status',
        'phone'
    ];
    /**
     * @param array $data
     * @param \App\Models\Update|boolean|mixed
     */
    public function validate($data = []){
         $pattern = '/^[0-9]{10,12}$/';
         if(!preg_match($pattern, $data['phone'])){
            $this->errors['phone'] = 'Phone number is invalid !!';
         }
        $pattern = '/^[a-z A-Z]{6,20}$/';
        if (!preg_match($pattern, $data['full_name'])) {
            $this->errors['full_name'] = "Only letters, numbers, underscore and at least 6 characters long allowed!";
        }
        $pattern = '/^[a-z A-Z0-9,-]{6,100}$/';
        if (!preg_match($pattern, $data['location'])) {
            $this->errors['location'] = "Only letters, numbers, underscore and at least 6 characters long allowed!";
        }
        if(count($this->errors)){
            return false;
        }
        return true;
        
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
 }