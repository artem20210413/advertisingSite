<?php

namespace App\Services;

use App\Models\Posts;

class PostsService
{

    public function getAll()
    {
        return Posts::all();
    }

}
