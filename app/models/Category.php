<?php

class Category extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $guarded = array('id', 'created_at', 'updated_at');

    public function subcategories() {
        return $this->hasMany('Subcategory');
    }

    public function photos() {
        return $this->hasMany('Photo');
    }

}