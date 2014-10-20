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

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('photo');


        parent::__construct($attributes);
    }
}