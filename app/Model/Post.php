<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers.
 *
 * @author		Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright	2017 Fariz Luqman
 * @license		MIT
 *
 * @link		https://stupidlysimple.github.io/
 */

namespace Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    /**
     * Get the comments for the Post.
     */
    public function comments()
    {
        return $this->hasMany('Model\Comment');
    }

    public function author()
    {
        return $this->belongsTo('Model\User', 'author_id');
    }
}
