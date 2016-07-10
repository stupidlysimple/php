<?php
namespace Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment'
    ];
}