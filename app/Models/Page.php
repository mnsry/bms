<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Page extends \TCG\Voyager\Models\Page
{
    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->orderBy('created_at', 'DESC');
    }
}
