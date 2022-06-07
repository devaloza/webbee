<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
public function parent() {
    return $this->belongsToOne(static::class, 'parent_id');
  }

  //each category might have multiple children
  public function childrens() {
    return $this->hasMany(static::class, 'parent_id');
  }
  public function children()
	{
    	return $this->childrens()->with('children');
	}
}
