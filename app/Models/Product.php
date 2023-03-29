<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 class Product extends Model{
    //use SoftDeletes; //Sd phuong thuc xoa mem
    /**
     * Ten bang, neu khong co thuoc tinh nay
     * Eloquent se lay ten theo ten cua Model o dang so nhieu
     * 
     * @var string
     */
    public $table = 'products';

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
        'brand_id',
        'name',
        'discount',
        'price',
        'image_1',
        'image_2'
    ];
    /**
     * @param array $data
     * @param \App\Models\Update|boolean|mixed
     */
    public function validate($data = []){
        //validate ID
        $pattern = '/^[a-zA-Z0-9\s_]{1,20}$/';
        if (!preg_match($pattern, $data['name'])) {
            $this->errors['name'] = "Only letters, numbers, underscore and at least 6 characters long allowed!";
        }
        $pattern = '/^[0-9_]{1,20}$/';
        if (!preg_match($pattern, $data['price'])) {
            $this->errors['price'] = "Only numbers!";
        }
        if (!preg_match($pattern, $data['discount'])) {
            $this->errors['discount'] = "Only numbers!";
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
    public function brands(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
 }