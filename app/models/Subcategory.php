<?php

class Subcategory extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subcategories';

    protected $guarded = array('id', 'created_at', 'updated_at');

    public function category() {
        return $this->belongsTo('Category');
    }
}