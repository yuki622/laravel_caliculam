<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
       use SoftDeletes;
        
        public function getPaginateBylimit(int $limit_count = 10)
        {
            return $this->orderBy('updated_at', 'DESC')->Paginate(2);
        }
        
       protected $fillable = [
           'title',
           'body',
       ];
        
        
}

