<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Photo extends Eloquent implements StaplerableInterface {

    use EloquentTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';

    protected $guarded = array('id', 'created_at', 'updated_at');

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('photo');


        parent::__construct($attributes);
    }

    public function category() {
        return $this->belongsTo('Category');
    }

    public function subcategory() {
        return $this->belongsTo('Subcategory');
    }

    public function toArray() {
        $array = parent::toArray();
        $array['photo_url'] = $this->photo->url();
        return $array;
    }
}