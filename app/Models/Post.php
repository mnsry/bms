<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends \TCG\Voyager\Models\Post
{
    public function page()
    {
        return $this->belongsTo(Voyager::modelClass('Page'));
    }
}
