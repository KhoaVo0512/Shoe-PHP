<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property bigint unsigned $district_id district id
 * @property varchar $name name
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 * @property timestamp $deleted_at deleted at
 * @property District $district belongsTo
 * @property \Illuminate\Database\Eloquent\Collection $contact hasMany
   
 */
class Brand extends Model
{

    use SoftDeletes;
    /**
     * Database table name
     */
    protected $table = 'brands';

    /**
     * Use timestamps 
     *
     * @var boolean
     */
    public $timestamps = true;

    /**
     * Mass assignable columns
     */
    protected $fillable = [
        'name_brand'
    ];

    /**
     * Date time columns.
     */
    protected $dates = [];

    /**
     * contacts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}
