<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers
 *
 * @package		StupidlySimple
 * @author		Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright	2017 Fariz Luqman
 * @license		MIT
 * @link		https://stupidlysimple.github.io/
 */
namespace Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
    /**
     * Get the post for the comment.
     */
    public function comments()
    {
        return $this->belongsTo('Model\Post', 'user_id');
    }
}
