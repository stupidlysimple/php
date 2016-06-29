<?php
namespace Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content'
    ];
	
    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('Model\Comment');
    }
	
}
