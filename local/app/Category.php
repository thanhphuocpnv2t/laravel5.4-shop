<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Turn off insert timestamps into database
    public $timestamps = false;
    
    public function getUpdatedAtColumn() {
        return null;
    }

	// Capitalize the first letter of category's name
    public function setNameAttribute($value) {
    	return $this->attributes['name'] = ucfirst($value);
    }

    
}
