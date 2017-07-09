<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Capitalize the first letter of category's name
    public function setNameAttribute($value) {
    	return $this->attributes['name'] = ucfirst($value);
    }
    
}
