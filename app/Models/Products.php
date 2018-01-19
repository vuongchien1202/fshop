<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table ='products';
	protected $guarded =[];

	public function category()
	{
		return $this->belongsTo('App\Models\Category','cat_id');
	}
	public function pro_details()
    {
        return $this->hasOne('App\Models\Pro_details','pro_id');
    }
    public function detail_img()
    {
        return $this->hasMany('App\Models\Detail_img','pro_id');
    }
    public function oders_detail()
    {
        return $this->hasOne('App\Models\Oders_detail','pro_id');
    }
}
