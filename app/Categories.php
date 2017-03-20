<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function categories($slug)
    {


		return $this
            ->where('categories.slug', '=', $slug)
            ->leftJoin('posts', 'posts.category_id', '=', 'categories.id')
            ->get();

    }
}